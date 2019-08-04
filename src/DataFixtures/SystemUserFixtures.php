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
        $u_system = new SystemUser;
        $u_system->setEmail("admin@gmail.com");        
        $u_system->setRoles(["ROLE_SUPERADMINSYS"]);      

        $u_system->setPassword($this->passencoder->encodepassword($u_system,"admin"));            
        $u_system->setNom("Admin");            
        $u_system->setPrenom("Admin");            
        $u_system->setTelephone(7784568);            
        $u_system->setStatus("");            

        $manager->persist($u_system);
        $manager->flush();
    }
}
