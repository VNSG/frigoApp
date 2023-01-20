<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class FrigoController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/', name: 'app_frigo')]
    public function index(): Response
    {
        return $this->render('frigo/index.html.twig', [
            'controller_name' => 'FrigoController',
        ]);
    }
}
