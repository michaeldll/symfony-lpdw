<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdditionController extends AbstractController
{
    /**
     * @Route("/addition", name="addition")
     */
    public function index()
    {
        return $this->render('addition/list.html.twig', [
            'number1' => 1,
            'number2' => 2,
            'controller_name' => 'AdditionController',
        ]);
    }
}
