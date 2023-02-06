<?php

namespace App\Controller;

use App\Service\ApiNewsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    #[Route('/article/service-one', name: 'app_article1')]
    public function serviceOne(ApiNewsService $apiNewsService): Response
    {
        $articles = $apiNewsService->NewsAgregator("83b7b88d427c48e0b0718c2bd2723c80", "general");
        return $this->render('article/service-one.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/article/service-two', name: 'app_article2')]
    public function serviceTwo(ApiNewsService $apiNewsService): Response
    {
        $articles = $apiNewsService->NewsAgregator("83b7b88d427c48e0b0718c2bd2723c80", "bitcoin");
        return $this->render('article/service-two.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/article/service-three', name: 'app_article3')]
    public function serviceThree(ApiNewsService $apiNewsService): Response
    {
        $articles = $apiNewsService->NewsAgregator("83b7b88d427c48e0b0718c2bd2723c80", "apple");
        return $this->render('article/service-three.html.twig', [
            'articles' => $articles,
        ]);
    }
}
