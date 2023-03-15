<?php

namespace App\Repository;

use App\Entity\FrequentationMuseesDeFrance2018;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FrequentationMuseesDeFrance2018>
 *
 * @method FrequentationMuseesDeFrance2018|null find($id, $lockMode = null, $lockVersion = null)
 * @method FrequentationMuseesDeFrance2018|null findOneBy(array $criteria, array $orderBy = null)
 * @method FrequentationMuseesDeFrance2018[]    findAll()
 * @method FrequentationMuseesDeFrance2018[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FrequentationMuseesDeFrance2018Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FrequentationMuseesDeFrance2018::class);
    }

    public function save(FrequentationMuseesDeFrance2018 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(FrequentationMuseesDeFrance2018 $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return FrequentationMuseesDeFrance2018[] Returns an array of FrequentationMuseesDeFrance2018 objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?FrequentationMuseesDeFrance2018
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
