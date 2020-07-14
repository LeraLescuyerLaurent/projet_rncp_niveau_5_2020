<?php

namespace App\Repository;

use App\Entity\SubCategories;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Common\Persistence\ManagerRegistry;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method SubCategories|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubCategories|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubCategories[]    findAll()
 * @method SubCategories[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubCategoriesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubCategories::class);
    }
 

    public function findAllSubCategories($page, $limit)
    {
        if (!is_numeric($page)) {
            throw new InvalidArgumentException(
                'La valeur de l\'argument $page est incorrecte (valeur : ' . $page . ').'
            );
        }

        if ($page < 1) {
            throw new NotFoundHttpException('La page demandée n\'existe pas');
        }

        if (!is_numeric($limit)) {
            throw new InvalidArgumentException(
                'La valeur de l\'argument $limit est incorrecte (valeur : ' . $limit . ').'
            );
        }

        $qb =  $this->createQueryBuilder('s')
        ->orderBy('s.id', 'DESC')
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
    // /**
    //  * @return SubCategories[] Returns an array of SubCategories objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SubCategories
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
