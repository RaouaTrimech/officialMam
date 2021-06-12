<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationController extends AbstractController
{
    /**
     * @Route("/presentation",name="presentationPage")
     */
    public function index(): Response
    {
        return $this->render('main/presentation.html.twig', [
            'controller_name' => 'PresentationController',
        ]);
    }
}
