<?php

namespace App\Infraestructure\Repository;

use App\Domain\Repository\PruebaRepositoryInterface;
use App\Domain\Entity\Prueba;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Prueba>
 *
 * @method Prueba|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prueba|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prueba[]    findAll()
 * @method Prueba[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PruebaRepository extends ServiceEntityRepository implements PruebaRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prueba::class);
    }

//    /**
//     * @return Prueba[] Returns an array of Prueba objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Prueba
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
    public function listPruebas() {
        return $this->findAll();
    }
}
