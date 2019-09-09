<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HallsController extends AbstractController
{
    /**
     * @Route("/halls", name="halls")
     */
    public function index()
    {
        return $this->render('halls/index.html.twig', [
            'controller_name' => 'HallsController',
        ]);
    }
}
