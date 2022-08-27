<?php

namespace App\Repository;

use App\Entity\CommandeAEmporter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CommandeAEmporter>
 *
 * @method CommandeAEmporter|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommandeAEmporter|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommandeAEmporter[]    findAll()
 * @method CommandeAEmporter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommandeAEmporterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommandeAEmporter::class);
    }

    public function add(CommandeAEmporter $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(CommandeAEmporter $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return CommandeAEmporter[] Returns an array of CommandeAEmporter objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?CommandeAEmporter
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
