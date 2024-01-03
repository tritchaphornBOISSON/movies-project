<?php

namespace App\Model;

use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;

class MovieApiManager
{

    public function getMovies() {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/trending/movie/day?language=en-US', [
            'headers' => [
                'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiI2N2QzNzBlOTI4NjUyZTAzNTRmZWE3Y2FiNWM4MjlhZSIsInN1YiI6IjYwMDZhOGQ4NDIwMjI4MDA0NGYxMzZlMyIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.QfNozgQjYPERKJOcYrHgpb5fV2_Y6tBJSjIBks3fkZI',
                'accept' => 'application/json',
            ],
        ]);

        return $response->getContent();

    }
}