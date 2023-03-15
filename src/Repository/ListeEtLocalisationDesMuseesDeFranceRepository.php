<?php

namespace App\Repository;

use App\Entity\ListeEtLocalisationDesMuseesDeFrance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ListeEtLocalisationDesMuseesDeFrance>
 *
 * @method ListeEtLocalisationDesMuseesDeFrance|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListeEtLocalisationDesMuseesDeFrance|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListeEtLocalisationDesMuseesDeFrance[]    findAll()
 * @method ListeEtLocalisationDesMuseesDeFrance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListeEtLocalisationDesMuseesDeFranceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListeEtLocalisationDesMuseesDeFrance::class);
    }

    public function save(ListeEtLocalisationDesMuseesDeFrance $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ListeEtLocalisationDesMuseesDeFrance $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ListeEtLocalisationDesMuseesDeFrance[] Returns an array of ListeEtLocalisationDesMuseesDeFrance objects
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

//    public function findOneBySomeField($value): ?ListeEtLocalisationDesMuseesDeFrance
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
