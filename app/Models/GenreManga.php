<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenreManga extends Model
{
    protected $table = 'genres_manga';

    protected $fillable = ['id', 'name', 'mal_id', 'url', 'count'];
}
