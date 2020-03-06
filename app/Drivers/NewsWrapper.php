<?php

namespace App\Drivers;

class NewsWrapper
{
    private $endpoint = 'http://newsapi.org/v2';

    public function getAuthHeader()
    {
        return [
            'X-Api-Key' => env('NEWS_API_KEY')
        ];
    }
}
