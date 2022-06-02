<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageController extends AbstractController
{
    /**
     * @Route("/img-route/{img}", name="img_route")
     * A route with one parameter
     */
    public function index($img): Response
    {
        //Retrieve the root folder with the kernel and then add the location of the
        //file
        $filename = $this->getParameter('uploads_directory').'/'. $img;
        //If the file exists then we return it, otherwise return 404
        if (file_exists($filename)) {
            //return a new BinaryFileResponse with the file name
            return new BinaryFileResponse($filename);
        } else {
            return new JsonResponse(null, 404);
        }
    }
}
