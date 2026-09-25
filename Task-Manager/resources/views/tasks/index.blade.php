<!DOCTYPE html>
<html>
<head>
<title>TaskFlow</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container">
<div class="header">
<div><h1>TaskFlow</h1><p>Organize your life, beautifully</p></div>
<a href="/tasks/create" class="btn-add">+ New Task</a>
</div>
<div class="stats">
<div class="stat-card"><h3>{{ $tasks->count() }}</h3><span>Total</span></div>
<div class="stat-card"><h3>{{ $tasks->where('status','Pending')->count() }}</h3><span>Pending</span></div>
<div class="stat-card"><h3>{{ $tasks->where('status','Completed')->count() }}</h3><span>Done</span></div>
</div>
@forelse($tasks as $task)
<div class="task-card {{ $task->status=='Completed'?'completed':'' }}">
<div class="task-info">
<div class="task-name">{{ $task->task_name }}</div>
@if($task->description)<div class="task-desc">{{ $task->description }}</div>@endif
<div class="task-meta">
<span class="badge {{ $task->status=='Pending'?'badge-pending':'badge-completed' }}">{{ $task->status }}</span>
<span class="badge badge-date">📅 {{ $task->due_date ?? 'No due date' }}</span>
</div>
</div>
<div class="task-actions">
<form action="/tasks/{{ $task->id }}/toggle" method="POST">@csrf @method('PATCH')<button class="btn btn-toggle">{{ $task->status=='Pending'?'✓ Done':'↩ Undo' }}</button></form>
<a href="/tasks/{{ $task->id }}/edit" class="btn btn-edit">Edit</a>
<form action="/tasks/{{ $task->id }}" method="POST" onsubmit="return confirm('Delete?')">@csrf @method('DELETE')<button class="btn btn-delete">Delete</button></form>
</div>
</div>
@empty
<div class="empty"><h2>✨ No tasks yet</h2><p>Create your first task!</p></div>
@endforelse
</div>
</body>
</html>