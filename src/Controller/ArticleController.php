<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController
{
    #[Route('/list-article', name: 'app_article_list')]
    public function list(): Response
    {
        return $this->render('list.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
    #[Route('/article/{slug}', name: 'app_article')]
    public function article(Article $article): Response
    {
        return $this->render('list.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
}
