<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name',
        'stage_name',
        'birth_date',
        'awards',
        'bio'
    ];
}
