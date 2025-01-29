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
        for ($i = 0; $i < 10; $i++) {
            $article1 = new Article();
            $article1->setTitle($this->faker->title);
            $article1->setContent($this->faker->realText($this->faker->numberBetween(10, 20)));
            $article1->setPublishedDate(new \DateTime('now'));
            $article1->setSlug(SlugGenerator::generateSlug($article1->getTitle()));
            $manager->persist($article1);
        }

        $manager->flush();
    }
}
