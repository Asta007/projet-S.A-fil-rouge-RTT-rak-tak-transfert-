<?php

namespace App\Controller;

use App\Entity\Transactions;
use App\Form\TransactionsType;
use App\Repository\TransactionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use App\Entity\SystemUser;
use App\Entity\Compte;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @Route("/transactions")
 */
class TransactionsController extends AbstractController
{
    /**
     * @Route("/", name="transactions_index", methods={"GET"})
     */
    public function index(TransactionsRepository $transactionsRepository,SerializerInterface $ser)
    {
        $transactionsRepository->findAll();
        $result = $ser->serialize($transactionsRepository,'json');
        $response = new Response($result);
        return($response);

    }

    /**
     * @Route("/new", name="transactions_new", methods={"GET","POST"})
     * 
     */
    public function new(Request $request,SerializerInterface $ser,ValidatorInterface $validator)
    {
        $this->denyAccessUnlessGranted('ROLE_CAISSIER','Vous n\'este pas abilité a modifier ce contenu');
        $data = $request->getContent();
        $data = json_decode($data,true);

        $caissier = $this->getDoctrine()->getRepository(SystemUser::class)->find($data['idcaissier']);
        
        $transaction = new Transactions();
        $transaction->setDate(new \DateTime('now'));
        $transaction->setTypeDeTransaction($data['type']);
        $transaction->setMontant($data['mnt']);
        $transaction->setCaissier($caissier);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($transaction);
        $entityManager->flush();

        $validation = $validator->validate($transaction);
        
        if(count($validation) > 0){
            $valresult = (string)$validation;
            $response = new Response($valresult);
            return ($response);
        }

        // on incremente le compte ayant subit la transactiions
        $cmpt = $this->getDoctrine()->getRepository(Compte::class)->findByIntitule($data['compte']);
        $cmpt[0]->setSolde($cmpt[0]->getSolde() + ($data['mnt']));

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $response = new Response($ser->serialize($transaction,'json'));
        return ($response);
    }

    /**
     * @Route("/{id}", name="transactions_show", methods={"GET"})
     */
    public function show(Transactions $transaction,$id,TransactionsRepository $transactionsRepository,SerializerInterface $ser)
    {
        $transactionsRepository->find($id);
        $result = $ser->serialize($transactionsRepository,'json');
        $response = new Response($result);
        return($response);
    }


    /**
     * @Route("/{id}/arhiver", name="transactions_archiver", methods={"POST"})
     */
    public function archiver(Request $request, Transactions $transaction)
    {
    
    }
}
