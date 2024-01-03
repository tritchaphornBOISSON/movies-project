<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Model\MovieApiManager;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function index()
    {
        $moviesManager = new MovieApiManager();
        $movies = $moviesManager->getMovies();
        $decodeMovies = json_decode($movies);
        return $this->render('home/index.html.twig', [ 'movies' => $decodeMovies]);
    }


}