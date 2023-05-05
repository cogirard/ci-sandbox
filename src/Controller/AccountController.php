<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    #[Route(path: '/account', name: 'app_account_myaccount', methods: ['GET'])]
    public function myAccount(): Response
    {
        return new Response(sprintf('<p>Logged in as %s</p>', $this->getUser()->getUserIdentifier()));
    }
}
