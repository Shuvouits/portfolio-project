<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'photo',
        'title',
        'headline',
        'description',
        'project_link'

    ];
}
