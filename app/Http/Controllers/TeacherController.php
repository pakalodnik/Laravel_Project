<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher; 

class TeacherController extends Controller
{
    //
    public function index()
    {
        //
        $teachers=Teacher::all();

        return view('teacher', compact('teachers'));
    }
}
