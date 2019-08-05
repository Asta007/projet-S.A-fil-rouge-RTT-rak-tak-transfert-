<?php

namespace App\Controller;

use App\Entity\Compte;
use App\Form\CompteType;
use App\Repository\CompteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Prestataires;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


/**
 * @Route("/compte")
 */
class CompteController extends AbstractController
{
    /**
     * @Route("/", name="compte_index", methods={"GET"})
     */
    public function index(CompteRepository $compteRepository): Response
    {
        $result = $compteRepository->findAll();
        $result = $this->get('serializer')->serialize($result,'json');
        $response = new Response($result);
        return($response);
    }

    /**
     * @Route("/new", name="compte_new", methods={"GET","POST"})
     */
    public function new(Request $request,ValidatorInterface $validator): Response
    {
        $this->DenyAccessUnlessGranted('ROLE_CAISSIER','Seul un caissier peut acceder ce plateforme');
        
        $data = $request->getContent();
        $data = json_decode($data,true);
        
        // recuperer l'Id maximalde la table compte
        $maxid = $this->getDoctrine()->getRepository(Compte::class)->CreateQueryBuilder('a')
            ->select('Max(a.id)')
            ->getQuery();
        $maxidresult = $maxid ->getResult();
        $maxid = ($maxidresult[0][1] + 1);
        $maxid = "C".$maxid;

        // recuperer l'id du prestataire associé via son matricule
        $matprest =  $this->getDoctrine()->getRepository(Prestataires::class)->findByMatricule($data['matricule']);
        $matprestid = ($matprest[0]->Getid());


        // combinner l'id max et lid du prestataire pour creer les nom du compte
        $intituleDeCompte = $maxid."-P".$matprestid;
        
        $compte = new Compte();
        $compte->SetIntitule($intituleDeCompte);
        $compte->setPrestataire($matprest[0]);
        $compte->SetSolde($data['solde']);
       
        $validations = $validator->validate($compte);
        if(count($validations) > 0){
            $strval = (string)$validations;
            $response = new Response($strval);
            return($response);
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($compte);
        $entityManager->flush();

        $response = new Response("compte ajouté avec success !");
        return($response);

    }// done !

    /**
     * @Route("/{id}", name="compte_show", methods={"GET"})
     */
    public function show(CompteRepository $compteRepository,$id)
    {
        $result = $compteRepository->find($id);
        $result = $this->get('serializer')->serialize($result,'json');
        $response = new Response($result);
        return($response);
    }
}
