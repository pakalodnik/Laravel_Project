<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;

class PDFTestController extends Controller
{
    //
    public function index()
    {
        //
        $publications=Publication::all();

        return view('test', compact('publications'));
    }
}
