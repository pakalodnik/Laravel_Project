<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qqson extends Model
{
    //
    protected $fillable=[
        'FIO',
        'publication_name',
        'journal',
        'date',
        'page'
        #'isVerified'
    ];
}
