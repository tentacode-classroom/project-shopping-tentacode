<?php

namespace App\Entity;

class Cat
{
    private $id;
    private $name;
    private $breed;
    private $birthdate;

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setBreed(Breed $breed): void
    {
        $this->breed = $breed;
    }

    public function getBreed(): Breed
    {
        return $this->breed;
    }

    public function setBirthdate(\DateTime $birthdate): void
    {
        $this->birthdate = $birthdate;
    }

    public function getBirthdate(): \DateTime
    {
        return $this->birthdate;
    }
}