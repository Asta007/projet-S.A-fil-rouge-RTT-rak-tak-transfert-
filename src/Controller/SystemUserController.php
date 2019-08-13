<?php

namespace App\Controller;

use App\Entity\SystemUser;
use App\Form\SystemUserType;
use App\Repository\SystemUserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Security;

/**
 * @Route("/system_user")
 */
class SystemUserController extends AbstractController
{
    /**
     * @Route("/", name="system_user_index", methods={"GET"})
     */
    public function index(Security $security ,SystemUserRepository $systemUserRepository,SerializerInterface $ser)
    {
        $result = $systemUserRepository->findAll();
        $result = $ser->serialize($result,'json');
        
        $username = $security->getUser()->getUsername();
        ?> <p> <u> <em> <?php echo "conected as ".$username; ?>  </em></u> </p> <br> <?php
        
        $response = new Response($result);
        return($response);
    }

    /**
     * @Route("/new", name="system_user_new", methods={"GET","POST"})
     */
    public function new(Request $request,UserPasswordEncoderInterface $passencoder)
    {
        $data = $request->getContent();
        $data = json_decode($data,true);

        $su = new SystemUser;
            $su->setEmail($data['email']);

            switch ($data['role']) {
                case 10:
                    $su->setRoles(["ROLE_SUPERADMINSYS"]);      
                    break;
                case 11:
                    $su->setRoles(["ROLE_ADMINSYS"]);      
                    break;
                case 12:
                    $su->setRoles(["ROLE_CAISSIER"]);      
                    break;
                default :
                    $su->setRoles(["ROLE_ADMINSYS"]);      
            }
            $su->setPassword($passencoder->encodepassword($su,($data['password'])));            
            $su->setNom($data['nom']);            
            $su->setPrenom($data['prenom']);            
            $su->setTelephone($data['telephone']); 
            $su->setStatus("dblked"); 

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($su);
            $entityManager->flush();

        $response = new Response($this->get('serializer')->serialize($su,'json'));
        return($response);
    }

    /**
     * @Route("/{id}", name="system_user_show", methods={"GET"})
     */
    public function show(SystemUserRepository $systemUserRepository,SerializerInterface $ser,$id)
    {
        $result = $systemUserRepository->find($id);
        $result = $ser->serialize($result,'json');
        $response = new Response($result);
        return($response);
    }

    /**
     * @Route("/{id}/edit", name="system_user_edit", methods={"GET","POST"})
     */
    public function edit(SystemUserRepository $systemUserRepository,Request $request,$id,SerializerInterface $ser,UserPasswordEncoderInterface $passencoder)
    {
        $data = $request->getContent();
        $data = json_decode($data,true);

        $user = $systemUserRepository->find($id);
        $user->setEmail($data['email']);
        switch ($data['role']) {
            case 10:
                $user->setRoles(["ROLE_SUPERADMINSYS"]);      
                break;
            case 11:
                $user->setRoles(["ROLE_ADMINSYS"]);      
                break;
            case 12:
                $user->setRoles(["ROLE_CAISSIER"]);      
                break;
            default :
                $user->setRoles(["ROLE_ADMINSYS"]);      
        }
        $user->setPassword($passencoder->encodepassword($user,($data['password'])));          
        $user->setNom($data['nom']);            
        $user->setPrenom($data['prenom']);            
        $user->setTelephone($data['telephone']);
        $user->setStatus("dblked");
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $result = $ser->serialize($user,'json');
        $response = new Response($result);
        return($response);

    }// done!
       

    /**
     * @Route("/{id}/block", name="system_user_block", methods={"POST"})
     */
    public function block($id,SystemUserRepository $systemUserRepository,SerializerInterface $ser)
    {

        $user = $systemUserRepository->find($id);   
        $user->setStatus("blcked");
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $result = $ser->serialize($user,'json');
        $response = new Response($result);
        return($response);
    }

    /**
     * @Route("/{id}/deblock", name="system_user_deblock", methods={"POST"})
     */
    public function deblock($id,SystemUserRepository $systemUserRepository,SerializerInterface $ser)
    {

        $user = $systemUserRepository->find($id);   
        $user->setStatus("dblcked");
        
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->flush();

        $result = $ser->serialize($user,'json');
        $response = new Response($result);
        return($response);
    }

     /**
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request)
    {
        $user = $request->getUser();
        var_dump($user);
        $req = $request->headers->get('X-API-TOKEN');
        var_dump($req);

        // return $this->json([
        //     'username' => $user->getUsername(),
        //     'roles' => $user->getRoles()
        // ]);

        return $this->json("test");
    }
}
