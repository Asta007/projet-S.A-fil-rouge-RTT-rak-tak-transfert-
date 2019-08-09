<?php

namespace App\Controller;

use App\Entity\CrudSupport;
use App\Form\CrudSupportType;
use App\Repository\CrudSupportRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/crud/support")
 */
class CrudSupportController extends AbstractController
{
    /**
     * @Route("/", name="crud_support_index", methods={"GET"})
     */
    public function index(CrudSupportRepository $crudSupportRepository): Response
    {
        return $this->render('crud_support/index.html.twig', [
            'crud_supports' => $crudSupportRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="crud_support_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $crudSupport = new CrudSupport();
        $form = $this->createForm(CrudSupportType::class, $crudSupport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($crudSupport);
            $entityManager->flush();

            return $this->redirectToRoute('crud_support_index');
        }

        return $this->render('crud_support/new.html.twig', [
            'crud_support' => $crudSupport,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="crud_support_show", methods={"GET"})
     */
    public function show(CrudSupport $crudSupport): Response
    {
        return $this->render('crud_support/show.html.twig', [
            'crud_support' => $crudSupport,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="crud_support_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CrudSupport $crudSupport): Response
    {
        $form = $this->createForm(CrudSupportType::class, $crudSupport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('crud_support_index');
        }

        return $this->render('crud_support/edit.html.twig', [
            'crud_support' => $crudSupport,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="crud_support_delete", methods={"DELETE"})
     */
    public function delete(Request $request, CrudSupport $crudSupport): Response
    {
        if ($this->isCsrfTokenValid('delete'.$crudSupport->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($crudSupport);
            $entityManager->flush();
        }

        return $this->redirectToRoute('crud_support_index');
    }
}
