<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route(path: '/', name: 'app_default_index', methods: ['GET'])]
    public function index(): Response
    {
        return new JsonResponse([
            'message' => 'chaussette',
            'content' => [
                'brand' => 'toto',
                'color' => 'yellow',
            ],
        ]);
    }
}
