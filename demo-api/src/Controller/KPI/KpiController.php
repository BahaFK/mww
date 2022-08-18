<?php

namespace App\Controller\KPI;


use App\Entity\Action;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use mysql_xdevapi\Result;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Rest\Route("/KPI")
 */
class KpiController  extends AbstractController
{
    /**
     * @var EntityManagerInterface
     */
    private  $doctrine;

    /**
     * @param EntityManagerInterface $doctrine
     */
    public function __construct(EntityManagerInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }


    /**
     * @Rest\Get("/identified", name="list_zipcode")
     *
     */
    public function getIdentified(){
        $count = $this->doctrine->getRepository(Action::class)->count([]);
        $done = $this->doctrine->getRepository(Action::class)->count(["status" => 100 ]);
        $inProgress = $this->doctrine->getRepository(Action::class)->getInprogress()[0][1];
        $Overdated = $this->doctrine->getRepository(Action::class)->getOverdated()[0][1];
        return new JsonResponse(
            [
                "code" => 200,
                "message" => "succes",
                "result" => [
                    "identfied" => $count,
                    "done" => $done,
                    "in_progress" => $inProgress,
                    "overdated" =>$Overdated
                ]

            ]
        );
    }
}