<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Car;

class ShoppingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $car1 = new Car();
        $car1->setBrand('Peugeot');
        $car1->setBuyDate(new \DateTime());
        $car1->setColor('Grise');

        $manager->persist($car1);

        $car2 = new Car();
        $car2->setBrand('Peugeot');
        $car2->setBuyDate(new \DateTime());
        $car2->setColor('Rouge');

        $manager->persist($car2);

        $tesla = new Car();
        $tesla->setBrand('Tesla');
        $tesla->setBuyDate(new \DateTime());
        $tesla->setColor('Noire');

        $manager->persist($tesla);

        $manager->flush();
    }
}
