<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intro extends Model
{
    //
    protected $fillable = [
        'title',
        'short_description',
        'experience',
        'complete_project',
        'photo',
        'resume',
    ];
    
}
