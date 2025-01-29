<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $admin = new User();
        $admin->setName('Admin');
        $admin->setEmail('admin@gmail.com');
        $admin->setPassword(password_hash('admin', PASSWORD_DEFAULT));
        $admin->setRoles(['ROLE_ADMIN']);

        $tartito = new User();
        $tartito->setName('Tartito');
        $tartito->setEmail('tartito@gmail.com');
        $tartito->setPassword(password_hash('tarto', PASSWORD_DEFAULT));
        $tartito->setRoles(['ROLE_USER']);

        $manager->persist($admin);
        $manager->persist($tartito);

        $manager->flush();
    }
}
