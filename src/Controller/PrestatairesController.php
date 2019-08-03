<?php

namespace App\Controller;

use App\Entity\Prestataires;
use App\Form\PrestatairesType;
use App\Repository\PrestatairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/prestataires")
 */
class PrestatairesController extends AbstractController
{
    /**
     * @Route("/", name="prestataires_index", methods={"GET"})
     */
    public function index(PrestatairesRepository $prestatairesRepository): Response
    {
        $result = $prestatairesRepository->findAll();
        $result = $this->get('serializer')->serialize($result,'json');
        $response = new Response($result);
        return($response);

    }//done

    /**
     * @Route("/new", name="prestataires_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $data = $request->getContent();
        $data = json_decode($data,true);
        $mat = date('y');
        $maxid = $this->getDoctrine()->getRepository(Prestataires::class)->CreateQueryBuilder('a')
            ->select('Max(a.id)')
            ->getQuery();
        $maxidresult = $maxid ->getResult();
        $maxid = ($maxidresult[0][1] + 1);
        $mat .="-P".$maxid; 
    
        $prestataire = new Prestataires();
            $prestataire ->setMatricule($mat);
            $prestataire ->setDenomination($data['denomination']);
            $prestataire ->setAdresse($data['adress']);
            $prestataire ->setContacte($data['contacte']);
            $prestataire ->setEmail($data['email']);
            $prestataire ->setStatus($data['status']);

        var_dump($prestataire);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($prestataire);
        $entityManager->flush();

        $response = new Response("ok");
        return($response);

    }//done

    /**
     * @Route("/{id}", name="prestataires_show", methods={"GET"})
     */
    public function show(prestatairesRepository $prestatairesRepository,$id ): Response
    {
        $result = $prestatairesRepository->find($id);
        $result = $this->get('serializer')->serialize($result,'json');
        $response = new Response($result);
        return($response);

    }//done

    /**
     * @Route("/{id}/edit", name="prestataires_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Prestataires $prestataire,prestatairesRepository $prestatairesRepository,$id): Response
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
    public function delete(Request $request, Prestataires $prestataire): Response
    {
        if ($this->isCsrfTokenValid('delete'.$prestataire->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($prestataire);
            $entityManager->flush();
        }

        return $this->redirectToRoute('prestataires_index');
    }
}
