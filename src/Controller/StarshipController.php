<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class StarshipController extends AbstractController
{
    #[Route(path: "/starships/{id<\d+>}", name:'app_starship_show')]
    public function show(int $id, StarshipRepository $repository)
    {
        $ship = $repository->find($id);
        if (!$ship) {
            throw $this->createNotFoundException('Nave no encontrada');
        }

        return $this->render('starship/show.html.twig', [
            'ship' => $ship, ]);
    }
}
