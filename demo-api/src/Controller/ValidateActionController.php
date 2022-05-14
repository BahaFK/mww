<?php

namespace App\Controller;

use App\Entity\Action;
use App\Service\FileUploader;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ValidateActionController extends AbstractController
{

    /**
     * @Route("/api/validate", methods={"POST","PUT"}, name="validate")
     * A route with one parameter
     */
    public function validate(Request $request, FileUploader $fileUploader, ManagerRegistry $doctrine)
    {
        $dataRequest = $request->request->all();

        if (isset($dataRequest['validation'])) {
            $data = json_decode($dataRequest['validation'], true);
            $action = $doctrine->getRepository(Action::class)->find($data['id']);

            $action->setStatus(50)
                ->setValidationDescription($data['validation_description']);

            // upload the file and save its filename
            $after_photo = [];
            foreach ($request->files as $file) {
                $after_photo[] = $fileUploader->upload($file);
            }
            $action->setPhotoAfter($after_photo);

        }
        $doctrine->getManager()->flush();

        return new Response("validated");


    }

    /**
     * @Route("/api/cloturer/{id}", methods={"POST"}, name="cloturer")
     * A route with one parameter
     */
    public function cloturer(Request $request, string $id, ManagerRegistry $doctrine)
    {
        $action = $doctrine->getRepository(Action::class)->find($id);

        $action->setStatus(100);


        $doctrine->getManager()->flush();

        return new Response("validated");


    }
}
