<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceInfo extends Model
{
    protected $fillable = [
        'icon',
        'service_name',
        'service_description',

    ];
}
