<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignINUPController extends AbstractController
{
    #[Route('/sign/i/n/u/p', name: 'sign_i_n_u_p')]
    public function index(): Response
    {
        return $this->render('sign_inup/index.html.twig', [
            'controller_name' => 'SignINUPController',
        ]);
    }
}
