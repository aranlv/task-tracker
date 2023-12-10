<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function view(){
        $tasks = Task::all();
        return view('viewTasks', compact('tasks'));
    }

    public function add(){
        return view('addTask');
    }

    public function save(Request $request){
        Task::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'dueDate' => $request->dueDate,
            'status' => $request->status
        ]);

        return redirect(route('view'));
    }
}
