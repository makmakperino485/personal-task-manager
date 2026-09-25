<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'task_name' => 'required',
            'description' => 'nullable',
        ]);

        Task::create([
            'task_name' => $request->task_name,
            'description' => $request->description,
            'status' => 'Pending'
        ]);

        return redirect('/tasks')->with('success','Task created!');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'task_name' => 'required',
            'description' => 'nullable',
        ]);

        $task->update([
            'task_name' => $request->task_name,
            'description' => $request->description,
        ]);

        return redirect('/tasks')->with('success','Task updated!');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks')->with('success','Task deleted!');
    }

    public function toggle(Task $task)
    {
        $task->status = $task->status == 'Pending' ? 'Completed' : 'Pending';
        $task->save();
        return redirect('/tasks');
    }
}