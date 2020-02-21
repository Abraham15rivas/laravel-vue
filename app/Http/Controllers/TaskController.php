<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }
   
    public function store(Request $request)
    {
        $task = Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'content' => $request->content,
            'user_id' => auth()->id()
        ]);        
    }

    public function show(Task $task, $id)
    {
        $task = Task::find($id);
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $task = Task::findOrFail($request->id);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->content = $request->content;
        $task->save();
        return $task;
    }

    public function destroy(Task $task, $id)
    {
        $task = Task::find($id);
        $task->delete(); 
        return $task;
    }
}