<?php

namespace App\Repository;

use App\Entity\Postulaciones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Mapping\Entity;

/**
 * @method Postulaciones|null find($id, $lockMode = null, $lockVersion = null)
 * @method Postulaciones|null findOneBy(array $criteria, array $orderBy = null)
 * @method Postulaciones[]    findAll()
 * @method Postulaciones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostulacionesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Postulaciones::class);
    }

    // /**
    //  * @return Postulaciones[] Returns an array of Postulaciones objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Postulaciones
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function postulacionesporadmin(){
        return($this->getEntityManager())
            ->createQuery('SELECT * FROM App/Entity/Postulaciones postulaciones ')
            ->getResult();


    }
}
