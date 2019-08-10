<?php

namespace App\Repository;

use App\Entity\Bullseye;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Bullseye|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bullseye|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bullseye[]    findAll()
 * @method Bullseye[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BullseyeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Bullseye::class);
    }

    // /**
    //  * @return Bullseye[] Returns an array of Bullseye objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bullseye
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
