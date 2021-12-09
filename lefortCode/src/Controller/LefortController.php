<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LefortController extends AbstractController
{
    /**
     * @Route("/lefort", name="lefort")
     */
    public function index(): Response
    {
        return $this->render('lefort/index.html.twig', [
            'controller_name' => 'LefortController',
        ]);
    }
}
