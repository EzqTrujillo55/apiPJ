<?php

namespace App\Repository;

use App\Entity\EstudianteOferta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method EstudianteOferta|null find($id, $lockMode = null, $lockVersion = null)
 * @method EstudianteOferta|null findOneBy(array $criteria, array $orderBy = null)
 * @method EstudianteOferta[]    findAll()
 * @method EstudianteOferta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstudianteOfertaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EstudianteOferta::class);
    }

    // /**
    //  * @return EstudianteOferta[] Returns an array of EstudianteOferta objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EstudianteOferta
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
