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
use Dompdf\Dompdf;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\KernelInterface;

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
     * @Route("/thepdf", name="prestataires_thepdf", methods={"GET"})
     */
    public function thepdf()
    {
        return $this->render('pdf_model.html.twig');

    }

    /**
     * @Route("/new", name="prestataires_new", methods={"GET","POST"})
     */
    public function new(KernelInterface $kernel,Request $request,UserPasswordEncoderInterface $PE,SerializerInterface $ser)
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
    
        $prestataire = new Prestataires;
            $form = $this->createForm(PrestatairesType::class,$prestataire);
            $form->submit($data);
            $prestataire ->setMatricule($mat);
            $prestataire ->setAdressePrest($request->request->get('adressPrest'));
            $prestataire ->setStatusPrest("dblked");

            $image = ($request->files->get('image'));
            if($image == null){
                throw new HttpException(500,"Veillez choisir une image pour votre entreprise");
            }
            $imageOriginalName = $image->getClientOriginalName();
            $destination = $kernel->getProjectDir().'/public/uploads';
            $prestataire->setImage($imageOriginalName);
            $extension = $image->getClientOriginalExtension();
            $valid_extension = ['png','jpg','jpeg','gif'];
                if(!in_array($extension,$valid_extension)){
                    throw new HttpException(500,'Votre fichier ne semble pas etre une image');
                }
            $image->move($destination,$imageOriginalName);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($prestataire);
        var_dump($prestataire);

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

        $entityManager->persist($compte);
        var_dump($compte);
        // Creation du user admin du Prestataire ==================================
        
        $user = new User();
        
        $form3 = $this->createForm(UserType::class,$user);
        $form3->submit($data);
            $user->setRoles(['ROLE_ADMINPREST']);
            $user->setPassword($PE->encodePassword($user,($data['password'])));
            $user->setPrestataire($prestataire);
            $user->setCompteAssocie($compte);
            $user->setStatusUser("dblcked");

        $entityManager->persist($user);
        // $entityManager->flush();

        $response = new Response("le Partenaire ".($request->request->get('denomination'))." a éte ajouter avec succes ainsi que son compte et son representant legal");
        return($response);

    }//done

    /**
     * @Route("/{id}", name="prestataires_show", methods={"GET"})
     */
    public function show(prestatairesRepository $prestatairesRepository,$id )
    {
        $result = $prestatairesRepository->find($id);
        $resultes = $this->get('serializer')->serialize($result,'json');
        $response = new Response($resultes);
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
        // $entityManager->flush();
        $response = new Response(($request->request->get('matricule'))." / ".($request->request->get('denomination'))." a éte débloqué avec succes");
        return($response);
        
    }// done
    
    /**
     * @Route("/pdf/{id}", name="generate_pdf", methods={"GET","POST"})
     */
    public function pdf($id){

        $dompdf = new Dompdf();
        
        // $repoprest = $this->getDoctrine()->getRepository(Prestataires::class)->find($id);
        // $denome = $repoprest->getDenomination();
        // $theid = $repoprest->getId();
        // $repouser = $this->getDoctrine()->getRepository(User::class)->findByPrestataire($theid);
        // $repouser = $repouser[0];
        // $name = $repouser->getNom();
        // $prenom = $repouser->getPrenom();
        // $email = $repouser->getEmailUser();
        // $adress = $repouser->getAdresseUser();
        // $tel = $repouser->getTelephoneUser();
        // $cni = $repouser->getCni();
        
        $date = date('d-m-y');
        $html = $this->renderView('pdf_model.html.twig');
        $dompdf->loadHtml($html);
        $dompdf->render();
        // $dompdf->stream("contrat_de partenariat (Wari_".$denome."pdf");
        $dompdf->stream("contract.pdf");

        return new Response ("teste");
    }
}
