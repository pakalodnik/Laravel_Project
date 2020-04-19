<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;

class PublicationController extends Controller
{
    //
    public function index(){
        $publications=Publication::all();

        return view('publication_show',compact('publications'));
    }
}
