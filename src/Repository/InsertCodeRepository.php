<?php

namespace App\Repository;

use App\Entity\InsertCode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InsertCode|null find($id, $lockMode = null, $lockVersion = null)
 * @method InsertCode|null findOneBy(array $criteria, array $orderBy = null)
 * @method InsertCode[]    findAll()
 * @method InsertCode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InsertCodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InsertCode::class);
    }

    // /**
    //  * @return InsertCode[] Returns an array of InsertCode objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InsertCode
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
