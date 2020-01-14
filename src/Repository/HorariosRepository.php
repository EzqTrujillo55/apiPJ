<?php

namespace App\Repository;

use App\Entity\Horarios;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Horarios|null find($id, $lockMode = null, $lockVersion = null)
 * @method Horarios|null findOneBy(array $criteria, array $orderBy = null)
 * @method Horarios[]    findAll()
 * @method Horarios[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HorariosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Horarios::class);
    }

    // /**
    //  * @return Horarios[] Returns an array of Horarios objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Horarios
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
