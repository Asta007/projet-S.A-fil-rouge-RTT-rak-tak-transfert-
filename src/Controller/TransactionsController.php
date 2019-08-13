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
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Security\Core\Security;



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
    public function new(Security $security, Request $request,SerializerInterface $ser,ValidatorInterface $validator)
    {
        $this->denyAccessUnlessGranted('ROLE_CAISSIER','Vous n\'este pas abilité a modifier ce contenu');
        $data = $request->request->all();
        $date = (new \DateTime('now'));
        $data += ['date' => $date];
        $montant = $request->request->get('montant');
        $compt = $request->request->get('compte');
        $curent_user = $security->getUser();
        $data += ['caissier' => $curent_user];

            if($montant < 75000){
                throw new HttpException(500,"le montant doit etre au moins etre de 75000");
            }

        $transactions = new Transactions;
        $form = $this->CreateForm(TransactionsType::class,$transactions);
        $form->submit($data);
        $transactions->setDate(new \DateTime('now'));
        $transactions->setCaissier($curent_user);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($transactions);

        // on incremente le compte ayant subit la transactiions
        $cmpt = $this->getDoctrine()->getRepository(Compte::class)->findByIntitule($compt);
        
        if($cmpt == null){
            throw new HttpException(500,'le compte '.$compt.' n\'a pas éte trouvé');
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
