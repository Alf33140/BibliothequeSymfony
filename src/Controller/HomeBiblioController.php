<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeBiblioController extends AbstractController
{
    #[Route('/home_biblio', name: 'app_home_biblio')]
    public function index(): Response
    {
        return $this->render('home_biblio/index.html.twig', [
            'controller_name' => 'HomeBiblioController',
        ]);
    }
}
