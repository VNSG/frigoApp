<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('user@user.com');
        $user->setPassword('$2y$13$f0EGe3DKec4yaoicmYNBpOhW/XqviR4KgRE16xkiKQY6glw4xVfQW');//demo
        $user->setRoles(['ROLE_USER']);
        $manager->persist($user);



        
        $manager->flush();
    }
}
