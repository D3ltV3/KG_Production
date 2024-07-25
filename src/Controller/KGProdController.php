<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class KGProdController extends AbstractController
{
    #[Route('/k/g/prod', name: 'app_k_g_prod')]
    public function index(): Response
    {
        return $this->render('kg_prod/index.html.twig', [
            'controller_name' => 'KGProdController',
        ]);
    }
}
