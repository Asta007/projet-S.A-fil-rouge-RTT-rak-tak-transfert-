<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\SystemUser;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SystemUserFixtures extends Fixture
{
    private $passencoder;

    public function __construct(UserPasswordEncoderInterface $passencoder){
        $this->passencoder = $passencoder;
    }

    public function load(ObjectManager $manager)
    {
        $i = 1;
        while($i < 3){
            $u_system = new SystemUser;
            $u_system->setEmail("email".$i." @gamil.com");            
            $u_system->setRoles(["ROLE_SUPERADMINSYS"]);      

            $u_system->setPassword($this->passencoder->encodepassword($u_system,"password1234"));            
            $u_system->setNom("nom".$i);            
            $u_system->setPrenom("prenom".$i);            
            $u_system->setTelephone(784568);            

            $manager->persist($u_system);
            $i++;
        }

        $manager->flush();
    }
}
