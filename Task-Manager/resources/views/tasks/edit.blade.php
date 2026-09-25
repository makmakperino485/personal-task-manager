@extends('layout')
@section('content')

<div class="form-box">
    <h2 style="margin-bottom:15px;">Edit Task</h2>
    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Task Name</label>
        <input type="text" name="task_name" value="{{ $task->task_name }}" required>

        <label>Description</label>
        <textarea name="description" rows="3">{{ $task->description }}</textarea>

        <label>Due Date</label>
        <input type="date" name="due_date" value="{{ $task->due_date }}">

        <label>Status</label>
        <select name="status">
            <option value="Pending" {{ $task->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Completed" {{ $task->status == 'Completed' ? 'selected' : '' }}>Completed</option>
        </select>

        <div style="margin-top:20px; display:flex; gap:10px;">
            <button type="submit" class="btn btn-blue">Update Task</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-gray">Cancel</a>
        </div>
    </form>
</div>

@endsection