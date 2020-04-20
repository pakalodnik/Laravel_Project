<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('tasks.index',['tasks'=>$tasks]);
    }
    public function create(){
        return view('tasks.create');
    }
    public function store(Request $request){
        $task = new Task;
        $task->fill($request->all());
        return redirect()->route('tasks.index');
    }
    public function edit($id){
        $Mytask = Task::find($id);
        return view('task.edit',['task'=>$Mytask]);
    }
    public function update(Request $request, $id){
        $Mytask = Task::find($id);
        return redirect()->route('tasks.index');
    }
    public function show($id){
        $Mytask = Task::find($id);
        return view('tasks.show',['task'=>$Mytask]);
    }
    public function destroy($id){
        Task::find($id)->delete();
        return redirect()->route('tasks.index');
    }
    //
}
