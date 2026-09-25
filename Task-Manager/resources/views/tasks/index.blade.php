<!DOCTYPE html>
<html>
<head>
<title>Task Manager</title>
<style>body{font-family:Arial; max-width:800px; margin:20px auto} .card{border:1px solid #ddd; padding:15px; margin:10px 0; border-radius:8px; display:flex; justify-content:space-between} .btn{padding:8px 12px; border:none; border-radius:5px; color:white; text-decoration:none} .btn-blue{background:#0d6efd} .btn-green{background:#198754} .btn-red{background:#dc3545} .btn-gray{background:#6c757d}</style>
</head>
<body>
<h1>📝 Personal Task Manager</h1>
<a href="/tasks/create" class="btn btn-blue">+ Add Task</a>
@foreach($tasks as $task)
<div class="card">
<div><strong>{{ $task->task_name }}</strong><br>{{ $task->description }}<br><small>Due: {{ $task->due_date ?? 'No date' }} | {{ $task->status }}</small></div>
<div>
<form action="/tasks/{{ $task->id }}/toggle" method="POST" style="display:inline">@csrf @method('PATCH')<button class="btn {{ $task->status=='Pending'?'btn-green':'btn-gray' }}">{{ $task->status=='Pending'?'Complete':'Undo' }}</button></form>
<a href="/tasks/{{ $task->id }}/edit" class="btn btn-blue">Edit</a>
<form action="/tasks/{{ $task->id }}" method="POST" style="display:inline">@csrf @method('DELETE')<button class="btn btn-red">Delete</button></form>
</div>
</div>
@endforeach
</body>
</html>