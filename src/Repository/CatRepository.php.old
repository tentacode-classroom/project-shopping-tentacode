<?php

namespace App\Repository;

use App\Entity\Cat;
use App\Entity\Breed;

class CatRepository
{
    private $cats;

    public function __construct()
    {
        $breed1 = new Breed();
        $breed1->setId(1);
        $breed1->setName('Européen');

        $cat1 = new Cat();
        $cat1->setId(11);
        $cat1->setName('Shiva');
        $cat1->setDescription('Shiva est un gros chat affectueux.');
        $cat1->setImage('/img/cats/shiva.jpg');
        $cat1->setBreed($breed1);
        $cat1->setBirthdate(new \DateTime('-10 years'));

        $breed2 = new Breed();
        $breed2->setId(2);
        $breed2->setName('Siamois');

        $cat2 = new Cat();
        $cat2->setId(12);
        $cat2->setName('Thalie');
        $cat2->setDescription('Thalie est un chat pot de colle.');
        $cat2->setImage('/img/cats/thalie.jpg');
        $cat2->setBreed($breed2);
        $cat2->setBirthdate(new \DateTime('-6 years'));

        $breed3 = new Breed();
        $breed3->setId(3);
        $breed3->setName('Main Coon');

        $cat3 = new Cat();
        $cat3->setId(13);
        $cat3->setName('Friedriech');
        $cat3->setDescription('Frifrou est le roi des chats.');
        $cat3->setImage('/img/cats/frifrou.jpg');
        $cat3->setBreed($breed3);
        $cat3->setBirthdate(new \DateTime('-4 years'));

        $this->cats = [
            $cat1,
            $cat2,
            $cat3,
        ];
    }

    public function findAll(): array
    {
        return $this->cats;
    }

    public function findOneById(int $id): Cat
    {
        foreach ($this->cats as $cat) {
            if ($cat->getId() === $id) {
                return $cat;
            }
        }

        throw new \RuntimeException(sprintf(
            'No cat found with id "%s"',
            $id
        ));
    }
}