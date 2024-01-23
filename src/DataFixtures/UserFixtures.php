<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for($i=0; $i<=5; $i++):
            $user = new User();
            $user->setNom($faker->lastName());
            $user->setPrenom($faker->firstName());
            $user->setAge($faker->numberBetween(18,99));
            $user->setTelephone($faker->randomElement(['0234568274','0678945632','0654122314','0954695487','0425632145']));
            $user->setEmail($faker->email());
            $user->setAdresse($faker->address());
            $user->setRoles($faker->randomElement([['ROLE_USER'],['ROLE_ADMIN']]));
            $user->setPassword($faker->password());


            // $manager->persist($user);
        endfor;

        // $manager->flush();
    }
}
