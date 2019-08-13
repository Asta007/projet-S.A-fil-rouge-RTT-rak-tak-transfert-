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
        // $this->denyAccessUnlessGranted('ROLE_CAISSIER','Vous n\'este pas abilité a modifier ce contenu');
        $data = $request->request->all();
        $date = (new \DateTime('now'));
        $data += ['date' => $date];
        $montant = $request->request->get('montant');
        $compt = $request->request->get('compte');

            if($montant < 75000){
                $response = new response ("le montant de au moin etre de 75000");
                return ($response);
            }

        $caissier = $request->request->get('caissier');
        $caissier = $this->getDoctrine()->getRepository(SystemUser::class)->find($caissier);
        
            if($caissier == null){
                return new response (" Impossible de trouver le caissier en question");
            }

        $transactions = new Transactions;
        $form = $this->CreateForm(TransactionsType::class,$transactions);
        $form->submit($data);
        $transactions->setDate(new \DateTime('now'));
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($transactions);

        // on incremente le compte ayant subit la transactiions
        $cmpt = $this->getDoctrine()->getRepository(Compte::class)->findByIntitule($compt);
        
        if($cmpt == null){
            $response = new Response("le compte n'existe pas");
            return ($response);
        }

        $cmpt[0]->setSolde($cmpt[0]->getSolde() + $montant);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $response = new Response("montant de ".$request->request->get('montant')." deposé sur le compte ".$request->request->get('compte'));
        return ($response);
    }

    /**
     * @Route("/{id}/arhiver", name="transactions_archiver", methods={"POST"})
     */
    public function archiver(Request $request, Transactions $transaction)
    {
    
    }
}
