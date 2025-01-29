<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/mentions-légales', name: 'mentions-légales')]
    public function legaleseses(): Response
    {
        return $this->render('home/legals.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
