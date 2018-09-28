<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Cat;

class ShoppingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cat1 = new Cat();
        $cat1->setName('Shiva');
        $cat1->setDescription('Shiva est un gros chat affectueux.');
        $cat1->setImage('/img/cats/shiva.jpg');
        $cat1->setBreed('Européen');
        $cat1->setBirthdate(new \DateTime('-10 years'));

        $manager->persist($cat1);

        $cat2 = new Cat();
        $cat2->setName('Thalie');
        $cat2->setDescription('Thalie est un chat pot de colle.');
        $cat2->setImage('/img/cats/thalie.jpg');
        $cat2->setBreed('Siamois');
        $cat2->setBirthdate(new \DateTime('-6 years'));

        $manager->persist($cat2);

        $cat3 = new Cat();
        $cat3->setName('Main Coon');
        $cat3->setDescription('Frifrou est le roi des chats.');
        $cat3->setImage('/img/cats/frifrou.jpg');
        $cat3->setBreed('Main Coon');
        $cat3->setBirthdate(new \DateTime('-4 years'));

        $manager->persist($cat3);

        $manager->flush();
    }
}
