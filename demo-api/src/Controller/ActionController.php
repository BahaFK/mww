<?php

namespace App\Controller;

use App\Entity\Action;
use App\Entity\Area;
use App\Entity\Waste;
use App\Service\FileUploader;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ActionController extends AbstractController
{
    public function __invoke(Request $request, FileUploader $fileUploader, ManagerRegistry $doctrine,LoggerInterface $logger)
    {

        $dataRequest = $request->request->all();
        try {
            if (isset($dataRequest['action'])) {
                $data = json_decode($dataRequest['action'], true);

                $area = $doctrine->getRepository(Area::class)->find($data['area']);
                $waste = $doctrine->getRepository(Waste::class)->find($data['waste']);
                // create a new entity and set its values
                $action = new Action();
                $action
                    ->setArea($area)
                    ->setDate(new \DateTime($data['date']))
                    ->setDescription($data['description'])
                    ->setDueDate(new \DateTime($data['dueDate']))
                    ->setFinding($data['finding'])
                    ->addWaste($waste)
                    ->setWeek($data['week']);
                // upload the file and save its filename
                $before_photo = [];
		foreach ($request->files as $file) {
			$logger->info("FILE :".$file->getClientOriginalName());

                    $before_photo[] = $fileUploader->upload($file);
                }

                return $action;
                $action->setPhotoBefore($before_photo);
            }
	} catch (\Exception  $ex) {
            $logger->error("HELLO  23/07/22 :".$ex->getMessage());
        }


    }


}
