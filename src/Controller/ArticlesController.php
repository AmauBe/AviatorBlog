<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    #[Route('/articles/{slug}', name: 'articles_show')]
    public function show(): Response
    {
        return $this->render('articles/show.html.twig', [
            'controller_name' => 'ArticlesController',
        ]);
    }
}
