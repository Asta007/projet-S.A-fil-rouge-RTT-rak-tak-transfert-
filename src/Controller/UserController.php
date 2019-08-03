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

/**
 * @Route("/user")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function index(UserRepository $userRepository): Response
    {
        $result = $userRepository->findAll();
        $result = $this->get('serializer')->serialize($result,'json');
        $response = new Response($result);
        return($response);
    }

    /**
     * @Route("/new", name="user_new", methods={"GET","POST"})
     */
    public function new(Request $request, UserPasswordEncoderInterface $PE){
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

        $result = $this->get('serializer')->serialize($user,'json');
        $response = new Response($result);
        return($response);
    }

    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(User $user)
    {
        
    }

    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, User $user)
    {
       
    }

    /**
     * @Route("/{id}", name="block", methods={"POST"})
     */
    public function block(Request $request){
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();
    }
}
