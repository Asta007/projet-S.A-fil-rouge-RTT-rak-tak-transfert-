<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Compte;

class CompteTest extends TestCase
{
    public function compteteste()
    {

        $matprest =  $this->getDoctrine()->getRepository(Prestataires::class)->findByMatricule("19-P1");
        $compte = new Compte();

        $compte->SetIntitule("C1-P1");
        $compte->setPrestataire($matprest[0]);
        $compte->SetSolde(76000);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($compte);
        $entityManager->flush();

        $this->assertEquals();
    }
}
