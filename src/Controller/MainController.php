<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', 'principal')]
    public function homepage(): Response
    {
        $starshipCount = 457;
        $miNave = [
            'name' => 'La Barquica Aspañola',
            'class' => 'Acorazado',
            'captain' => 'Paquito Pepinillos',
            'status' => 'En construcción'

        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount,
            'miNave' => $miNave,
                ]);
    }
}