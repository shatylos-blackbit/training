<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    #[Route('/movie', name: 'app_movie_index')]
    public function index(): Response
    {
        return $this->render('movie/index.html.twig', [
            'controller_name' => 'MovieController',
        ]);
    }
    #[Route('/movie/{id}', name: 'app_movie_detail')]
    public function detail(): Response
    {
        $movie = [
            'title' => 'Star Wars',
            'releasedAt' => (new \DateTimeImmutable('25-05-1977')),
            'genre' => [
                'Action',
                'Adventure',
                'Fantasy',
            ],
        ];
        return $this->render('movie/show.html.twig', [
            'controller_name' => 'MovieController',
            'movie' => $movie,
        ]);
    }

    #[Route('/decades', name: 'app_movie_decades')]
    public function decades(): Response
    {
        $decades = [1970, 1980, 1990, 2000];
        return $this->render("includes/_decades.html.twig", [
            'decades' => $decades,
        ])->setMaxAge(3600);
    }

}
