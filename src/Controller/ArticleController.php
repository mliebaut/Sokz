<?php


namespace App\Controller;


use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ArticleController extends AbstractController
{

    #[Route('/list-article', name: 'app_article_list', methods: ['GET'])]
    public function list(): Response
    {
        return $this->render('article/list.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }
    #[Route('/article/{slug}', name: 'app_article', methods: ['GET'])]
    public function article(#[MapEntity(mapping: ['slug' => 'slug'])] Article $article): Response
    {
        return $this->render('article/article.html.twig', [
            //'controller_name' => 'ArticleController',
            'article' => $article,
        ]);
    }


}
