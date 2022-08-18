<?php

namespace App\Repository;
use App\Entity\Action;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Action|null find($id, $lockMode = null, $lockVersion = null)
 * @method Action|null findOneBy(array $criteria, array $orderBy = null)
 * @method Action[]    findAll()
 * @method Action[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Action::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Action $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Action $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getInprogress()
    {
        $query = $this->createQueryBuilder('a');

        $query
            ->select('count(a.id)')
            ->where("a.dueDate >= CURRENT_TIMESTAMP()")
            ->andWhere(" a.status < 100  OR a.status  IS NULL");


        return $query->getQuery()->getResult();
    }

    public function getOverdated(){
        $query = $this->createQueryBuilder('a');

        $query
            ->select('count(a.id)')
            ->where("a.dueDate < CURRENT_TIMESTAMP()")
            ->andWhere("a.status < 100 OR a.status  IS NULL");


        return $query->getQuery()->getResult();
    }

    /*
    public function findOneBySomeField($value): ?Action
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
