<?php

namespace App\Controller;

use App\Entity\Member;
use App\Repository\MemberRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ArtistController extends AbstractController
{
    #[Route(path: '/artists/list', name: 'app_artist_list')]
    public function list(MemberRepository $memberRepository): Response
    {
        $artists = $memberRepository->findForList();

        return $this->render('artist/list.html.twig', [
            'artists' => $artists,
        ]);
    }

    #[Route(path: '/artists/edit/{member}', name: 'app_artist_edit')]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(Member $member): Response
    {
        return new Response('Bravo');
    }
}
