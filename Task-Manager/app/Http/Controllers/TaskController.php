<?php
namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at','desc')->get();
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
            'due_date' => 'nullable|date',
            'status' => 'required'
        ]);

        Task::create([
            'task_name' => $request->task_name,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'status' => $request->status
        ]);

        return redirect()->away('https://stunning-umbrella-vprq44jxg5pq3px46-8000.app.github.dev/tasks');
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
            'due_date' => 'nullable|date',
            'status' => 'required'
        ]);

        $task->update([
            'task_name' => $request->task_name,
            'description' => $request->description,
            'due_date' => $request->due_date,
            'status' => $request->status,
        ]);

        return redirect()->away('https://stunning-umbrella-vprq44jxg5pq3px46-8000.app.github.dev/tasks');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->away('https://stunning-umbrella-vprq44jxg5pq3px46-8000.app.github.dev/tasks');
    }

    public function toggle(Task $task)
    {
        if ($task->status == 'Pending') {
            $task->status = 'In Progress';
        } elseif ($task->status == 'In Progress') {
            $task->status = 'Completed';
        } else {
            $task->status = 'Pending';
        }
        $task->save();
        return redirect()->away('https://stunning-umbrella-vprq44jxg5pq3px46-8000.app.github.dev/tasks');
    }

    public function updateStatus(Request $request, Task $task)
    {
        $task->status = $request->status;
        $task->save();
        return redirect()->away('https://stunning-umbrella-vprq44jxg5pq3px46-8000.app.github.dev/tasks');
    }
}