<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OwnManga extends Model
{
    protected $table = 'ownmangas';

    protected $fillable = [
        'user_id',
        'manga_id',
        'volume'
    ];
}
