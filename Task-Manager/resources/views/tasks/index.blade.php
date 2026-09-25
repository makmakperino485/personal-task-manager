@extends('layout')
@section('content')

<a href="/tasks/create" class="btn btn-blue">+ Add New Task</a>

<div style="margin-top: 20px;">
@forelse($tasks as $task)
    <div class="card {{ $task->status == 'Completed' ? 'completed' : 'pending' }}">
        <div>
            <div class="task-name {{ $task->status == 'Completed' ? 'done' : '' }}">{{ $task->task_name }}</div>
            <div class="task-meta">{{ $task->description }}</div>
            <div class="task-meta">
                Due: <b>{{ $task->due_date ?? 'No date' }}</b> 
                <span class="badge {{ $task->status == 'Pending' ? 'badge-pending' : 'badge-completed' }}">{{ $task->status }}</span>
            </div>
        </div>
        <div class="actions">
            <form action="/tasks/create" method="POST">
                @csrf @method('PATCH')
                <button class="btn btn-green">{{ $task->status == 'Pending' ? 'Complete' : 'Undo' }}</button>
            </form>
            <a href="/tasks/create" class="btn btn-yellow">Edit</a>
            <form action="{{ route('tasks.destroy', $task) }}" method="POST" onsubmit="return confirm('Delete this task?')">
                @csrf @method('DELETE')
                <button class="btn btn-red">Delete</button>
            </form>
        </div>
    </div>
@empty
    <div class="form-box" style="text-align:center;">No tasks yet. Add one!</div>
@endforelse
</div>

@endsection