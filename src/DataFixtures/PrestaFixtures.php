<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Prestataires;

class PrestaFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $i = 1;
        while($i < 7){
            $prest = new Prestataires();
            $prest ->setMatricule("19-P".$i);
            $prest ->setDenomination("Bakh Yaye Solution");
            $prest ->setAdresse("dakar");
            $prest ->setContacte(123456984);
            $prest ->setEmail("email".$i."@gmail.com");
            if ( $i % 2 == 0){
                $prest ->setStatus("blked");
            }
            else{
                $prest ->setStatus("dblked");
            }

            $manager->persist($prest);
            $manager->flush();

            $i++;
        }
    }
}
