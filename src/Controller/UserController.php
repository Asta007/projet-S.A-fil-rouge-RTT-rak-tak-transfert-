<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Prestataires;
use App\Entity\Compte;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository,SerializerInterface $ser)
    {
        $result = $userRepository->findAll();
        $result = $ser->serialize($result,'json');
        $response = new Response($result);
        return($response);

    }//done

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $PE,SerializerInterface $ser){
        $data = $request->getContent();
        $data = json_decode($data,true);

        // recuperation de l'objet prestataire
        $prestrepo = $this->getDoctrine()->getRepository(Prestataires::class)->findByMatricule($data['prestataire']);
        $prestataire = ($prestrepo[0]);

        
        // recuperation de l'objet compte associé
        $compterepo = $this->getDoctrine()->getRepository(Compte::class)->findByIntitule($data['compte']);
        $compte = ($compterepo[0]);

        
        $user = new User();
        $user->setEmail($data['email']);

        switch ($data['role']){
            case 20:
            $user->setRoles(["ROLE_ADMINPREST"]);
            case 21:
            $user->setRoles(["ROLE_USERPREST"]);
            default : 
            $user->setRoles(["ROLE_USERPREST"]);
        }
        $user->setPassword($PE->encodePassword($user,($data['email'])));
        $user->setNom($data['nom']);
        $user->setPrenom($data['prenom']);
        $user->setAdresse($data['adresse']);
        $user->setTelephone($data['telephone']);
        $user->setCni($data['cni']);
        $user->setStatus($data['status']);
        $user->setPrestataire($prestataire);
        $user->setCompteAssocie($compte);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        $result = $ser->serialize($user,'json');
        $response = new Response($result);
        return($response);

    }//done

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(UserRepository $userRepository,$id,SerializerInterface $ser)
    {
        $result = $userRepository->find($id);
        $result = $ser->serialize($result,'json');
        $response = new Response($result);
        return($response);
        
    }//done

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user)
    {
    
    }

    /**
     * @Route("/{id}/block", name="block", methods={"POST"})
     */
    public function block(Request $request,UserRepository $userRepository,$id){
        $user = $userRepository->find($id);
        $user->setStatus("blked");

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

    }//done

    /**
     * @Route("/{id}/dblock", name="deblock", methods={"POST"})
     */
    public function deblock(Request $request,UserRepository $userRepository,$id){
        $user = $userRepository->find($id);
        $user->setStatus("dblked");

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

    }//done 
}
