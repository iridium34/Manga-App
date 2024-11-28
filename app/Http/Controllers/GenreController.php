<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use GuzzleHttp\Client;

class GenreController extends Controller
{
    public function indexManga(): View
    {
        $client = new Client(['base_uri' => 'https://api.jikan.moe/v4/', 'timeout' => 2.0]);

        $response = $client->request('GET', 'genres/manga');

        return view('genres.manga', [
            'genres' => json_decode($response->getBody()->getContents(), true)['data'],
        ]);
    }
}