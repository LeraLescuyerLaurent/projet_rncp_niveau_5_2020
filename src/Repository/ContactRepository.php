<?php

namespace App\Repository;

use App\Entity\Contact;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Contact|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contact|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contact[]    findAll()
 * @method Contact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contact::class);
    }

    public function findAllContactByPage($page, $limit)
    {
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

    // **
    //  * @return Contact[] Returns an array of Contact objects
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
    public function findOneBySomeField($value): ?Contact
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
