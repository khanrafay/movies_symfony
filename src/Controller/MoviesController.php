<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    /**
     * @Route("/movies", name="app_movies")
     */
    public function index(): Response
    {
        $movies = [
            ['title' => 'The Shawshank Redemption', 'year' => 1994],
            ['title' => 'The Godfather', 'year' => 1972],
            ['title' => 'The Dark Knight', 'year' => 2008]
        ];

        return $this->render('index.html.twig', array('movies' => $movies));
    }
}
