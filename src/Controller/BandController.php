<?php

namespace App\Controller;

use App\Repository\BandRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BandController extends AbstractController
{
    #[Route(path: '/bands/list', name: 'app_band_list', methods: ['GET'])]
    public function list(BandRepository $bandRepository): Response
    {
        $bands = $bandRepository->findAll();

        return $this->render('band/list.html.twig', [
            'bands' => $bands,
        ]);
    }
}
