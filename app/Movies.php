<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'title',
        'original_title',
        'nationality',
        'date',
        'vote',
    ];
}
