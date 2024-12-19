<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    //
    protected $fillable = [
        'address',
        'email',
        'phone',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'pinterest',
        'copyright',
        'meta_title',
        'meta_description',
        'logo'
    ];


}
