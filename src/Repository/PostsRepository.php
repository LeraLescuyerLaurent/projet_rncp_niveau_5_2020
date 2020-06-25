<?php

namespace App\Repository;

use App\Entity\Posts;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Common\Persistence\ManagerRegistry;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Posts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Posts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Posts[]    findAll()
 * @method Posts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PostsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Posts::class);
    }


        
    /**
     * FindTheCategorieOfPost
     *
     * @param  mixed $value
     * 
     */
    public function FindPostByCategorie($id,$page,$limit )
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


        $qb =  $this->createQueryBuilder('p')
            ->andWhere('p.online = :online')
            ->join('p.subCategory', 's')
            ->andWhere('s.categories = :val')
            ->setParameter('val', $id)
            ->setParameter('online',true)
            ->orderBy('p.createdAt', 'DESC')
            ->getQuery()
        ;
        $premierResultat = ($page - 1) * $limit;
        $qb->setFirstResult($premierResultat)->setMaxResults($limit);
        $paginator = new Paginator($qb);

        if ( ($paginator->count() <= $premierResultat) && $page != 1) {
            throw new NotFoundHttpException('La page demandée n\'existe pas.'); // page 404, sauf pour la première page
        }

       
        // dd($paginator);
        return $paginator;
    }

    public function findBySubCategorie($id,$page,$limit)
    {
        $qb =  $this->createQueryBuilder('p')
        ->andWhere('p.online = :online')
        ->andWhere('p.subCategory = :val')
        ->setParameter('val', $id)
        ->setParameter('online',true)
        ->orderBy('p.createdAt', 'DESC')
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
     * countPostsOfCategorie
     *
     * @return void
     */
    public function countPostsOfCategorie()
    {
        return $this->createQueryBuilder('p')
            ->select('count(p) as total','c.id','c.name','c.slug')
            ->join('p.subCategory', 's')
            ->groupBy('s.categories')
            ->join('s.categories', 'c')
            ->getQuery()
            ->getResult()
        ;
    }
    public function countPostsOfSubCategorieForSubCategorie($id)
    {
        return  $this->createQueryBuilder('p')
            ->select('count(p) as total','s.name','s.id','s.slug')
            ->groupBy('p.subCategory')
            ->join('p.subCategory', 's')
            ->andWhere('s.categories = :id')
            ->setParameter('id',$id)
            ->getQuery()
            ->getResult()
        ;
    }
public function countPostsOfSubCategorieForCategorie($id)
{
    return  $this->createQueryBuilder('p')
        ->select('count(p) as total','s.name','s.id','s.slug')
        ->groupBy('p.subCategory')
        ->join('p.subCategory', 's')
        ->andWhere('s.categories = :id')
        ->setParameter('id',$id)
        ->getQuery()
        ->getResult()
    ;
}
public function UpdatePointsOfPost($id,$points)
{
    return  $this->createQueryBuilder('p')
        ->update(Posts::class,'p')
        ->set('p.points', '?1')
        ->where('p.id = :id')
        ->setParameter('id', $id)
        ->setParameter(1, $points)
        ->getQuery()
        ->getResult()
    ;
}

public function findAllPost($page, $limit){
    $qb =  $this->createQueryBuilder('p')
    ->orderBy('p.id', 'DESC')
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
    //  * @return Posts[] Returns an array of Posts objects
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
    public function findOneBySomeField($value): ?Posts
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
