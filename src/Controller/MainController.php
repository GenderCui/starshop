<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        $starshipCount = 457;
        $miNave = [
            'nombre' => 'La Barquica Aspañola',
            'class' => 'Acorazado',
            'capitan' => 'Paquito Pepinillos',
            'estado' => 'En construcción'

        ];

        return $this->render('main/homepage.html.twig', [
            'numberOfStarships' => $starshipCount,
            'miNave' => $miNave,
                ]);
    }
}