<?php

namespace App\Repository;

use App\Entity\CrudSupport;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CrudSupport|null find($id, $lockMode = null, $lockVersion = null)
 * @method CrudSupport|null findOneBy(array $criteria, array $orderBy = null)
 * @method CrudSupport[]    findAll()
 * @method CrudSupport[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CrudSupportRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CrudSupport::class);
    }

    // /**
    //  * @return CrudSupport[] Returns an array of CrudSupport objects
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
    public function findOneBySomeField($value): ?CrudSupport
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
