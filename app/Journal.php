<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    //
    protected $fillable=[
        'title',
        'magazine',
        'country',
        'univercity',
        'year',
        'url',
        'page',
        'factor',
        'base'
        #'isVerified'
    ];
}
