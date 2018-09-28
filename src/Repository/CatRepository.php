<?php

namespace App\Repository;

use App\Entity\Cat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cat[]    findAll()
 * @method Cat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CatRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Cat::class);
    }

    public function findAllCatsHomepage()
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.image <> :image')
            ->setParameter('image', '')
            ->andWhere('c.name <> :catName')
            ->setParameter('catName', 'Satan')
            ->orderBy('c.birthdate', 'DESC')
            ->setMaxResults(5)
            ->getQuery()
            ->getResult()
        ;
    }

    /*
    public function findOneBySomeField($value): ?Cat
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
