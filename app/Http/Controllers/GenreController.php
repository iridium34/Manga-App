<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use GuzzleHttp\Client;
use App\Models\GenreManga;
use App\Models\Fetch;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{
    public function fetch()
    {
        $client = new Client(['base_uri' => 'https://api.jikan.moe/v4/', 'timeout' => 2.0]);

        $response = $client->request('GET', 'genres/manga');

        $genres = json_decode($response->getBody()->getContents(), true)['data'];

        foreach ($genres as $genre) {
            GenreManga::updateOrCreate(
                ['id' => $genre['mal_id']],
                [
                'name' => $genre['name'],
                'mal_id' => $genre['mal_id'],
                'url' => $genre['url'],
                'count' => $genre['count']
            ]);
        };
        fetch::create([
            'category' => 'GenreManga'
        ]);
        return "FETCH DONE";

    }
    public function indexManga(): View
    {
        return view('genres.manga', [
            'genres' => DB::table('genres_manga')->paginate(10)
        ]);
    }
}