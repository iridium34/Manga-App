<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'https://api.jikan.moe/v4/',
    'timeout' => 2.0
]);

$response = $client->request('GET', 'genres/manga');

$data = json_decode($response->getBody()->getContents(), true)['data'];

class UpdateDataFromRestApi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-data-from-rest-api';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
    }
}
