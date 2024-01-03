<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;

class MovieApiManager
{

    public function getMovies() {
        $client = HttpClient::create();
        $apiKey = $_ENV['MOVIE_API_KEY'];
        $response = $client->request('GET', 'https://api.themoviedb.org/3/trending/movie/day?language=en-US', [
            'headers' => [
                'Authorization' => 'Bearer ' . $apiKey,
                'accept' => 'application/json',
            ],
        ]);

        return $response->getContent();

    }
}