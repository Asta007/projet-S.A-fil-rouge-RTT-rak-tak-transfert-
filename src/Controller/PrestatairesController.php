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
use App\Form\CompteType;
use App\Form\UserType;

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
        $data = $request->request->all();

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
            $form = $this->createForm(PrestatairesType::class,$prestataire);
            $form->submit($data);
            $prestataire ->setMatricule($mat);
            $prestataire ->setAdressePrest($request->request->get('adressPrest'));
            $prestataire ->setStatusPrest("dblked");
        // var_dump($prestataire);

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
        $form2 = $this->CreateForm(CompteType::class,$compte);
        $form2->submit($data);
            $compte->SetIntitule($intituleDeCompte);
            $compte->setPrestataire($prestataire);
            $compte->setSolde(0);
        // var_dump($compte);

        $entityManager->persist($compte);

        // Creation du user admin du Prestataire ==================================
        
        $user = new User();
        
        $form3 = $this->createForm(UserType::class,$user);
        $form3->submit($data);
            $user->setRoles(['ROLE_ADMINPREST']);
            $user->setPassword($PE->encodePassword($user,($data['password'])));
            $user->setPrestataire($prestataire);
            $user->setCompteAssocie($compte);
            $user->setStatusUser("dblcked");
        // var_dump($user);    

        $entityManager->persist($user);
        $entityManager->flush();

        $response = new Response("le Partenaire ".($request->request->get('denomination'))." a éte ajouter avec succes ainsi que son compte et son representant legal");
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
        $data = $request->request->all();
        $form = $this->createForm(PrestatairesType::class,$prestataire);
        $form->submit($data);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $response = new Response("les parametre de \" ".($request->request->get('matricule'))." / ".($request->request->get('denomination'))." \" ont éte mis a jour");
        return($response);

    }//done

     /**
     * @Route("/{id}/block", name="prestataires_blk", methods={"GET","POST"})
     */
    public function block(Prestataires $prestataire, Request $request)
    {

        $data = $request->request->all();
        $form = $this->createForm(PrestatairesType::class,$prestataire);
        $form->submit($data);
        $prestataire->setStatusPrest("blcked");
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $response = new Response(($request->request->get('matricule'))." / ".($request->request->get('denomination'))." a éte bloqué avec succes");
        return($response);

    }// done

    /**
     * @Route("/{id}/dblock", name="prestataires_deb", methods={"GET","POST"})
     */
    public function dblock(Prestataires $prestataire, Request $request)
    {

        $data = $request->request->all();
        $form = $this->createForm(PrestatairesType::class,$prestataire);
        $form->submit($data);
        $prestataire->setStatusPrest("dblcked");
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $response = new Response(($request->request->get('matricule'))." / ".($request->request->get('denomination'))." a éte débloqué avec succes");
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
