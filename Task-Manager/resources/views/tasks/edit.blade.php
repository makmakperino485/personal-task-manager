<!DOCTYPE html>
<html><head><title>Edit - TaskFlow</title><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="/css/style.css"></head>
<body class="form-body"><div class="form-card">
<h2>Edit Task</h2><p class="sub">Update your task details</p>
<form action="/tasks/{{ $task->id }}" method="POST">@csrf @method('PUT')
<label>Task Name *</label><input type="text" name="task_name" value="{{ $task->task_name }}" required>
<label>Description</label><textarea name="description">{{ $task->description }}</textarea>
<label>Status</label>
<select name="status">
<option value="Pending" {{ $task->status=='Pending'?'selected':'' }}>Pending</option>
<option value="In Progress" {{ $task->status=='In Progress'?'selected':'' }}>In Progress</option>
<option value="Completed" {{ $task->status=='Completed'?'selected':'' }}>Completed</option>
</select>
<label>Due Date</label><input type="date" name="due_date" value="{{ $task->due_date }}">
<div class="form-row"><a href="/tasks" class="btn-secondary">Cancel</a><button class="btn-primary">Update 🚀</button></div>
</form></div></body></html>