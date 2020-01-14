<?php

namespace App\Repository;

use App\Entity\CarreraRelacionada;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CarreraRelacionada|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarreraRelacionada|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarreraRelacionada[]    findAll()
 * @method CarreraRelacionada[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarreraRelacionadaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarreraRelacionada::class);
    }

    // /**
    //  * @return CarreraRelacionada[] Returns an array of CarreraRelacionada objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CarreraRelacionada
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
