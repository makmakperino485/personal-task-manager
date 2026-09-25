<!DOCTYPE html>
<html><head><title>Create - TaskFlow</title><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="/css/style.css"></head>
<body class="form-body"><div class="form-card">
<h2>Create New Task</h2><p class="sub">What do you want to accomplish?</p>
<form action="/tasks" method="POST">@csrf
<label>Task Name *</label><input type="text" name="task_name" placeholder="Ex: Finish Laravel Project" required>
<label>Description</label><textarea name="description" placeholder="Add details..."></textarea>
<label>Due Date</label><input type="date" name="due_date">
<div class="form-row"><a href="/tasks" class="btn-secondary">Cancel</a><button class="btn-primary">Create Task ✨</button></div>
</form></div></body></html>