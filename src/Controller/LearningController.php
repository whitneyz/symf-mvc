<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//todo do you need to add your html template here

class LearningController extends AbstractController
{
    /**
     * @Route("/learning", name="learning")
     */
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }
    /**
     * @Route("/learning", name="learning")
     */
    public function aboutme(): Response
    {
        return $this->render('learning/aboutme.html.twig', [
            'controller_name' => 'LearningController',
        ]);
    }
}


/*{

    public function index(): Response
{
    return $this->render('learning/index.html.twig', [
        'controller_name' => 'LearningController',
    ]);
}
}*/


