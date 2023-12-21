<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function view(){
        $tasks = Task::all();
        $categories = Category::all();
        return view('viewTasks', compact('tasks', 'categories'));
    }

    public function add(){
        $categories = Category::all();
        return view('addTask', compact('categories'));
    }


    public function save(Request $request){
        // $request->validate([
        //     'title' => 'required|min:3',
        //     'desc' => 'required|max:15',
        //     'dueDate' => 'required|date',
        //     'image' => 'required|mimes:png,jpg'
        // ]);

        $fileName = $request->title . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $fileName);

        Task::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'dueDate' => $request->dueDate,
            'status' => $request->status,
            'image' => $fileName,
            'categoryID' => $request->categoryName
        ]);

        return redirect(route('view'));
    }

    public function edit($id){
        $task = Task::findOrFail($id);
        $categories = Category::all();
        return view('editTask', compact('task', 'categories'));
    }

    public function update($id, Request $request){
        $task = Task::findOrFail($id);

        $fileName = $request->title . '-' . $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/image', $fileName);

        $task->update([
            'title' => $request->title, 
            'desc' => $request->desc, 
            'dueDate' => $request->dueDate, 
            'status' => $request->status,
            'image' => $fileName,
            'categoryID' => $request->categoryName
        ]);

        return redirect(route('view'));
    }

    public function delete($id){
        Task::destroy($id);
        return redirect(route('view'));

    }
}
