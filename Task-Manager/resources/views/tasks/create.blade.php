<!DOCTYPE html>
<html><head><title>Create</title><style>body{font-family:Arial; max-width:600px; margin:20px auto} input,textarea{width:100%; padding:8px; margin:5px 0 15px 0} .btn{padding:10px 15px; background:#0d6efd; color:white; border:none; border-radius:5px}</style></head>
<body>
<h2>Create Task</h2>
<form action="/tasks" method="POST">
@csrf
<label>Task Name</label><input type="text" name="task_name" required>
<label>Description</label><textarea name="description"></textarea>
<label>Due Date</label><input type="date" name="due_date">
<button class="btn">Save Task</button> <a href="/tasks">Back</a>
</form>
</body></html>