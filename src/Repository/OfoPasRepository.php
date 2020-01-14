<?php

namespace App\Repository;

use App\Entity\OfoPas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method OfoPas|null find($id, $lockMode = null, $lockVersion = null)
 * @method OfoPas|null findOneBy(array $criteria, array $orderBy = null)
 * @method OfoPas[]    findAll()
 * @method OfoPas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OfoPasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OfoPas::class);
    }

    // /**
    //  * @return OfoPas[] Returns an array of OfoPas objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?OfoPas
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
