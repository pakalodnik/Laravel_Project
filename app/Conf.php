<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conf extends Model
{
    //
    protected $fillable=[
        'FIO',
        'publication_name',
        'conf',
        'place',
        'date',
        'page'
        #'isVerified'
    ];
}
