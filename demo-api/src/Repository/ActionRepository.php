<?php

namespace App\Repository;
use App\Entity\Action;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Query\ResultSetMapping;
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
    public function getChart(int  $unitId){
        $rsm = new ResultSetMapping();
        $rsm->addScalarResult("total","total");
        $rsm->addScalarResult("overdated","overdated");
        $rsm->addScalarResult("in_progress","in_progress");
        $rsm->addScalarResult("done","done");
        $querry =
            "SELECT COUNT(a.id) as total,
	( SELECT COUNT(s1.id) as c1 from
		(
		SELECT
			a1.id
		from
			`action` as a1
		INNER JOIN area ar on
			ar.id = a1.area_id
		INNER JOIN unit u on
			u.id = ar.unit_id
		WHERE
			u.id = :unitId
			AND (a1.due_date < CURRENT_TIMESTAMP()
				AND (a1.status < 100
					OR a1.status IS NULL))) as s1) as overdated,
	(
	SELECT
		COUNT(s2.id)as c2
	from
		(
		SELECT
			a2.id
		from
			`action` as a2
		INNER JOIN area ar on
			ar.id = a2.area_id
		INNER JOIN unit u on
			u.id = ar.unit_id
		WHERE
			u.id = :unitId
			AND (a2.due_date >= CURRENT_TIMESTAMP()
				AND (a2.status < 100
					OR a2.status IS NULL))) as s2) as in_progress,
	(
	SELECT
		COUNT(s3.id)as c3
	from
		(
		SELECT
			a3.id
		from
			`action` as a3
		INNER JOIN area ar on
			ar.id = a3.area_id
		INNER JOIN unit u on
			u.id = ar.unit_id
		WHERE
			u.id = :unitId
			AND a3.status = 100) as s3) as done,
	u.`ref` as unit
from
	`action` a
INNER JOIN area ar on
	ar.id = a.area_id
INNER JOIN unit u on
	u.id = ar.unit_id
WHERE
	u.id  = :unitId;";
    $query = $this->getEntityManager()->createNativeQuery($querry,$rsm);

        $query->setParameter(':unitId', $unitId);


        return $query->getArrayResult();
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
