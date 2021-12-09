<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControllerClassController extends AbstractController
{
    /**
     * @Route("/controller/class", name="controller_class")
     */
    public function index(): Response
    {
        return $this->render('controller_class/index.html.twig', [
            'controller_name' => 'ControllerClassController',
        ]);
    }
}
