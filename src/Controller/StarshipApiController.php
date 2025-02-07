<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StarshipApiController extends AbstractController
{
    #[Route('/starship/api', name: 'app_starship_api')]
    public function index(): Response
    {
        return $this->render('starship_api/index.html.twig', [
            'controller_name' => 'StarshipApiController',
        ]);
    }
}
