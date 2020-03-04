<?php

namespace App\Drivers;

class NewsWrapper
{
    public function getAuthHeader()
    {
        return [
            'X-Api-Key' => env('NEWS_API_KEY')
        ];
    }
}
