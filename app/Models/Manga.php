<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    protected $table = 'mangas';

    protected $fillable = [
        'id',
        'url',
        'img_webp',
        'img_webp_small',
        'img_webp_large',
        'title',
        'title_english',
        'title_japanese',
        'title_synonyms',
        'type',
        'chapters',
        'volumes',
        'status',
        'synopsis',
        'background',
        'authors',
        'genres',
        'serializations',
        'explicit_genres',
        'demographics',
    ];

    protected $casts = [
        'authors' => 'array',
        'genres' => 'array',
        'serializations' => 'array',
        'explicit_genres' => 'array',
        'demographics' => 'array',
        'title_synonyms' => 'array',
    ];
}
