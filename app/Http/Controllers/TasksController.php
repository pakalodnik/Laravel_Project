<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index(){
        return view('tasks.index');
    }
    public function create(){
        return view('tasks.create');
    }
    public function store(Request $request){
        $task = new Task;
        $task->fill($request->all());
        return redirect()->route('tasks.index');
    }
    //
}
