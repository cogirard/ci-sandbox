<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route(path: '/index', name: 'app_default_index', methods: ['GET'])]
    public function index(): Response
    {
        return new Response('bravo');
    }
}
