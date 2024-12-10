<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;
use App\Models\Manga;
use App\Models\OwnManga;
use App\Models\Fetch;

class MangaController extends Controller
{
    public $query = "";

    public function fetch()
    {
        $client = new Client(['base_uri' => 'https://api.jikan.moe/v4/', 'timeout' => 5.0]);

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

    public function search(Request $request): View {
        $request->query('q');

        $client = new Client(['base_uri' => 'https://api.jikan.moe/v4/', 'timeout' => 5.0]);
        $response = $client->request('GET', 'manga?q='.$request->q);
        $mangas = json_decode($response->getBody()->getContents(), true)['data'];

        return view('mangas.search', ['mangas' => $mangas, 'query' => $request->q])->with(compact('mangas'));
    }

    public function showManga(string $id): View {

        Log::debug('Reached this point');

        $client = new Client(['base_uri' => 'https://api.jikan.moe/v4/', 'timeout' => 5.0]);
        $response = $client->request('GET', 'manga/'.$id);
        $mangas = json_decode($response->getBody()->getContents(), true)['data'];

        return view('mangas.show', [
            'mangas' => $mangas
        ])->with(compact('mangas'));
    }

    public function addOwnManga(Request $request): View {
        $request->query('id');

}

}
