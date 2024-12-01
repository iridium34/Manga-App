<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use GuzzleHttp\Client;
use App\Models\Manga;
use App\Models\Fetch;

class MangaController extends Controller
{
    public $query = "";

    public function fetch()
    {
        $client = new Client(['base_uri' => 'https://api.jikan.moe/v4/', 'timeout' => 2.0]);

        $response = $client->request('GET', 'manga');

        $mangas = json_decode($response->getBody()->getContents(), true)['data'];

        foreach ($mangas as $manga) {
            Manga::updateOrCreate(
                ['id' => $manga['mal_id']],
                [
                'url' => $manga['url'],    
                'img_webp' => $manga['images']['webp']['image_url'],
                'img_webp_small' => $manga['images']['webp']['small_image_url'],
                'img_webp_large' => $manga['images']['webp']['large_image_url'],
                'title' => $manga['title'],
                'title_english' => $manga['title_english'],
                'title_japanese' => $manga['title_japanese'],
                'title_synonyms' => $manga['title_synonyms'],
                'type' => $manga['type'],
                'chapters' => $manga['chapters'],
                'volumes' => $manga['volumes'],
                'status' => $manga['status'],
                'synopsis' => $manga['synopsis'],
                'background' => $manga['background'],
                'authors' => $manga['authors'],
                'genres' => $manga['genres'],
                'serializations' => $manga['serializations'],
                'explicit_genres' => $manga['explicit_genres'],
                'demographics' => $manga['demographics']
            ]);
        };
        fetch::create([
            'category' => 'Manga'
        ]);
        return "FETCH DONE";

    }
    public function indexManga(): View {
        return view('mangas.index', [
            'mangas' => Manga::paginate(12)
        ]);
    }

    public function search(string $id): View {

        return view('mangas.search', [
            ''
        ]);
    }

}
