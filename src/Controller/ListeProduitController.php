<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListeProduitController extends AbstractController
{
    #[Route('/liste/produit', name: 'liste_produit')]
    public function index(): Response
    {
        return $this->render('liste_produit/index.html.twig', [
            'controller_name' => 'ListeProduitController',
        ]);
    }
}
