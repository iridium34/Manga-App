<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fetch extends Model
{
    protected $table = 'fetches';

    protected $fillable = ['category'];
}
