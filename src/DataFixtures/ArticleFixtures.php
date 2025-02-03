<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Service\SlugGenerator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ArticleFixtures extends Fixture
{
    public function __construct()
    {
        $this->faker = Factory::create();
    }

    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article->setTitle('Notre Mascotte Joyeuse');
        $article->setContent('Découvrez notre nouvelle mascotte joyeuse !');
        $article->setViews(0);
        $manager->persist($article);

        $article2 = new Article();
        $article2->setTitle('Collection Colorée');
        $article2->setContent('Notre nouvelle collection de chaussettes colorées est arrivée !');
        $article2->setViews(0);
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setTitle('Tendances de l\'été');
        $article3->setContent('Les nouvelles tendances pour cet été...');
        $article3->setViews(0);
        $manager->persist($article3);

        $manager->flush();
    }
}