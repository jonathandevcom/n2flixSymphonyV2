<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordEncoder)
    {
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setFirstname('Bob');
        $user->setLastname('Lob');
        $user->setEmail('bob@gmail.com');
      /*  $user->setPassword($this->passwordEncoder->hashPassword(
            $user,
            'bob'
        ));*/
        $manager->persist($user);

        $user->setFirstname('Bab');
        $user->setLastname('Lab');
        $user2 = new User();
        $user2->setEmail('bob2@gmail.com');
      /*  $user2->setPassword($this->passwordEncoder->hashPassword(
            $user2,
            'bob'
        ));*/
        $manager->persist($user2);
        $manager->flush();
    }
}
