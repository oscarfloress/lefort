<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SoldItemController extends AbstractController
{
    /**
     * @Route("/sold/item", name="sold_item")
     */
    public function index(): Response
    {
        return $this->render('sold_item/index.html.twig', [
            'controller_name' => 'SoldItemController',
        ]);
    }
}
