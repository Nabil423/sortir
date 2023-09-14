<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;
use App\Entity\User;


class AppFixtures extends Fixture
{
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setEmail($this->faker->email())
                ->setPassword($this->faker->word())
                ->setPseudo($this->faker->word())
                ->setNom($this->faker->word())
                ->setPrenom($this->faker->word())
                ->setTelephone($this->faker->phoneNumber());

            

            $manager->persist($user);
        }

        $manager->flush();
    }
}
