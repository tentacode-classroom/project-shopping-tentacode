<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Cat;
use App\Entity\Breed;
use App\Entity\Tag;

class ShoppingFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $breed = new Breed();
        $breed->setName('Européen');

        $tagMignon = new Tag();
        $tagMignon->setName('Mignon');
        $tagGros = new Tag();
        $tagGros->setName('Gros');
        $tagPoilu = new Tag();
        $tagPoilu->setName('Poilu');

        $manager->persist($tagPoilu);
        $manager->persist($tagGros);
        $manager->persist($tagMignon);

        // $manager->persist($breed);

        $cat1 = new Cat();
        $cat1->setName('Shiva');
        $cat1->setDescription('Shiva est un gros chat affectueux.');
        $cat1->setImage('/img/cats/shiva.jpg');
        $cat1->setBreed($breed);
        $cat1->setBirthdate(new \DateTime('-10 years'));
        $cat1->addTag($tagMignon);
        $cat1->addTag($tagGros);
        $cat1->addTag($tagPoilu);

        $manager->persist($cat1);

        $cat2 = new Cat();
        $cat2->setName('Thalie');
        $cat2->setDescription('Thalie est un chat pot de colle.');
        $cat2->setImage('/img/cats/thalie.jpg');
        $cat2->setBreed($breed);
        $cat2->setBirthdate(new \DateTime('-6 years'));
        $cat2->addTag($tagMignon);
        $cat2->addTag($tagGros);

        $manager->persist($cat2);

        $cat3 = new Cat();
        $cat3->setName('Main Coon');
        $cat3->setDescription('Frifrou est le roi des chats.');
        $cat3->setImage('/img/cats/frifrou.jpg');
        $cat3->setBreed($breed);
        $cat3->setBirthdate(new \DateTime('-4 years'));
        $cat3->addTag($tagMignon);

        $manager->persist($cat3);

        $manager->flush();
    }
}
