<?php

namespace App\Controller;

use App\Entity\SystemUser;
use App\Form\SystemUserType;
use App\Repository\SystemUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/system/user")
 */
class SystemUserController extends AbstractController
{
    /**
     * @Route("/", name="system_user_index", methods={"GET"})
     */
    public function index(SystemUserRepository $systemUserRepository): Response
    {
        return $this->render('system_user/index.html.twig', [
            'system_users' => $systemUserRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="system_user_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $systemUser = new SystemUser();
        $form = $this->createForm(SystemUserType::class, $systemUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($systemUser);
            $entityManager->flush();

            return $this->redirectToRoute('system_user_index');
        }

        return $this->render('system_user/new.html.twig', [
            'system_user' => $systemUser,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="system_user_show", methods={"GET"})
     */
    public function show(SystemUser $systemUser): Response
    {
        return $this->render('system_user/show.html.twig', [
            'system_user' => $systemUser,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="system_user_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, SystemUser $systemUser): Response
    {
        $form = $this->createForm(SystemUserType::class, $systemUser);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('system_user_index');
        }

        return $this->render('system_user/edit.html.twig', [
            'system_user' => $systemUser,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="system_user_delete", methods={"DELETE"})
     */
    public function delete(Request $request, SystemUser $systemUser): Response
    {
        if ($this->isCsrfTokenValid('delete'.$systemUser->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($systemUser);
            $entityManager->flush();
        }

        return $this->redirectToRoute('system_user_index');
    }
}
