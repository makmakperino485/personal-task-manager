<!DOCTYPE html>
<html><head><title>Edit</title><style>body{font-family:Arial; max-width:600px; margin:20px auto} input,textarea{width:100%; padding:8px; margin:5px 0 15px 0} .btn{padding:10px 15px; background:#0d6efd; color:white; border:none; border-radius:5px}</style></head>
<body>
<h2>Edit Task</h2>
<form action="/tasks/{{ $task->id }}" method="POST">
@csrf @method('PUT')
<label>Task Name</label><input type="text" name="task_name" value="{{ $task->task_name }}" required>
<label>Description</label><textarea name="description">{{ $task->description }}</textarea>
<label>Due Date</label><input type="date" name="due_date" value="{{ $task->due_date }}">
<button class="btn">Update</button> <a href="/tasks">Back</a>
</form>
</body></html>