<?php

namespace App\Controller;

use App\Entity\Prestataires;
use App\Form\PrestatairesType;
use App\Repository\PrestatairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\Compte;
use App\Entity\User;

/**
 * @Route("/prestataires")
 */
class PrestatairesController extends AbstractController
{
    /**
     * @Route("/", name="prestataires_index", methods={"GET"})
     */
    public function index(PrestatairesRepository $prestatairesRepository)
    {
        $result = $prestatairesRepository->findAll();
        $result = $this->get('serializer')->serialize($result,'json');
        $response = new Response($result);
        return($response);

    }//done

    /**
     * @Route("/new", name="prestataires_new", methods={"GET","POST"})
     */
    public function new(Request $request,UserPasswordEncoderInterface $PE,SerializerInterface $ser)
    {
        $data = $request->getContent();
        $data = json_decode($data,true);

        // Ajoute du Prestataire ==================================
        
        $mat = date('y');
        $maxid = $this->getDoctrine()->getRepository(Prestataires::class)->CreateQueryBuilder('a')
            ->select('Max(a.id)')
            ->getQuery();
        $maxidresult = $maxid ->getResult();
        $idDuPrest = ($maxidresult[0][1] + 1);
        $maxid = ($maxidresult[0][1] + 1);
        
        $mat .="-P".$maxid; 
    
        $prestataire = new Prestataires();
            $prestataire ->setMatricule($mat);
            $prestataire ->setDenomination($data['denomination']);
            $prestataire ->setAdresse($data['adress']);
            $prestataire ->setContacte($data['contacte']);
            $prestataire ->setEmail($data['emailp']);
            $prestataire ->setStatus($data['statusp']);
        var_dump($prestataire);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($prestataire);

        // Creation du compte pour le prestataire Prestataire ==================================

        // l'Id maximalde table compte
        $maxid = $this->getDoctrine()->getRepository(Compte::class)->CreateQueryBuilder('a')
            ->select('Max(a.id)')
            ->getQuery();
        $maxidresult = $maxid ->getResult();
        $maxid = ($maxidresult[0][1] + 1);
        $maxid = "C".$maxid;

        // concatener 'id max et lid du prestataire
        $intituleDeCompte = $maxid."-P".$idDuPrest;
        
        $compte = new Compte();
            $compte->SetIntitule($intituleDeCompte);
            $compte->setPrestataire($prestataire);
            $compte->SetSolde(0);
        var_dump($compte);

        $entityManager->persist($compte);

        // Creation du user admin du Prestataire ==================================
        
        $user = new User();
            $user->setRoles(["ROLE_ADMINPREST"]);
            $user->setPassword($PE->encodePassword($user,($data['password'])));
            $user->setNom($data['nom']);
            $user->setEmail($data['email']);
            $user->setPrenom($data['prenom']);
            $user->setAdresse($data['adresse']);
            $user->setTelephone($data['telephone']);
            $user->setCni($data['cni']);
            $user->setStatus($data['status']);
            $user->setPrestataire($prestataire);
            $user->setCompteAssocie($compte);
        var_dump($user);    

        $entityManager->persist($user);
        $entityManager->flush();
            
       
        $response = new Response("ok");
        return($response);

    }//done

    /**
     * @Route("/{id}", name="prestataires_show", methods={"GET"})
     */
    public function show(prestatairesRepository $prestatairesRepository,$id )
    {
        $result = $prestatairesRepository->find($id);
        $result = $this->get('serializer')->serialize($result,'json');
        $response = new Response($result);
        return($response);

    }//done

    /**
     * @Route("/{id}/edit", name="prestataires_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Prestataires $prestataire,prestatairesRepository $prestatairesRepository,$id)
    {
        $data = $request->getContent();
        $data = json_decode($data,true);

        $prestataire = $prestatairesRepository->find($id);
        
        $prestataire ->setMatricule($data['matricule']);
        $prestataire ->setDenomination($data['denomination']);
        $prestataire ->setAdresse($data['adress']);
        $prestataire ->setContacte($data['contacte']);
        $prestataire ->setEmail($data['email']);
        $prestataire ->setStatus($data['status']);
        var_dump($prestataire);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $response = new Response("response edit");
        return($response);

    }//done

     /**
     * @Route("/{id}/block", name="prestataires_blk", methods={"GET","POST"})
     */
    public function block(prestatairesRepository $prestatairesRepository,$id)
    {

        $prestataire = $prestatairesRepository->find($id);
        $prestataire ->setStatus("blked");

        var_dump($prestataire);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $response = new Response("response");
        return($response);

    }// done

    /**
     * @Route("/{id}/dblock", name="prestataires_deb", methods={"GET","POST"})
     */
    public function dblock(prestatairesRepository $prestatairesRepository,$id)
    {

        $prestataire = $prestatairesRepository->find($id);
        $prestataire ->setStatus("dblked");

        var_dump($prestataire);
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $response = new Response("response");
        return($response);

    }// done


    /**
     * @Route("/{id}", name="prestataires_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Prestataires $prestataire)
    {
        if ($this->isCsrfTokenValid('delete'.$prestataire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($prestataire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('prestataires_index');
    }
}
