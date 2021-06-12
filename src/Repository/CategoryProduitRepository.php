<?php

namespace App\Repository;

use App\Entity\CategoryProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoryProduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryProduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryProduit[]    findAll()
 * @method CategoryProduit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryProduit::class);
    }

    // /**
    //  * @return CategoryProduit[] Returns an array of CategoryProduit objects
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
    public function findOneBySomeField($value): ?CategoryProduit
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
