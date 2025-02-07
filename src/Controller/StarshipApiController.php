<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships/{id<+d>}')]
    public function getCollection(StarshipRepository $repository, int $id): Response
    {
        $starships = $repository->findAll();

        return $this->json($starships);
    }
}
