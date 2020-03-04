<?php

namespace App\Repository;

use App\Entity\FileLogger;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FileLogger|null find($id, $lockMode = null, $lockVersion = null)
 * @method FileLogger|null findOneBy(array $criteria, array $orderBy = null)
 * @method FileLogger[]    findAll()
 * @method FileLogger[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoggerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FileLogger::class);
    }

    // /**
    //  * @return FileLogger[] Returns an array of FileLogger objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FileLogger
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
