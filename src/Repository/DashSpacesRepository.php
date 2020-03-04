<?php

namespace App\Repository;

use App\Entity\DashSpaces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DashSpaces|null find($id, $lockMode = null, $lockVersion = null)
 * @method DashSpaces|null findOneBy(array $criteria, array $orderBy = null)
 * @method DashSpaces[]    findAll()
 * @method DashSpaces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DashSpacesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DashSpaces::class);
    }

    // /**
    //  * @return DashSpaces[] Returns an array of DashSpaces objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DashSpaces
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
