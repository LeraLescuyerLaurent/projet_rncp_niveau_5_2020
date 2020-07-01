<?php

namespace App\Repository;

use App\Entity\Categories;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Common\Persistence\ManagerRegistry;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Categories|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categories|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categories[]    findAll()
 * @method Categories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categories::class);
    }


    public function findAllCategorie($page , $limit){
  

        $qb =  $this->createQueryBuilder('c')
        ->orderBy('c.id', 'DESC')
        ->getQuery()
        ;
        
        $premierResultat = ($page - 1) * $limit;
        $qb->setFirstResult($premierResultat)->setMaxResults($limit);
        $paginator = new Paginator($qb);
        
        if ( ($paginator->count() <= $premierResultat) && $page != 1) {
            throw new NotFoundHttpException('La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }
        return $paginator;
    }
    /**
     * @return Categories[] Returns an array of Categories objects
     */
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
    public function findOneBySomeField($value): ?Categories
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
