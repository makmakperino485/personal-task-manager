<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
</head>
<body style="font-family: Arial; padding:30px;">
    <h1>Add New Task</h1>
    <form action="/tasks" method="POST">
        @csrf
        <p>Task Name:</p>
        <input type="text" name="task_name" required style="width:100%; padding:10px;">

        <p>Description:</p>
        <textarea name="description" rows="4" style="width:100%; padding:10px;"></textarea>

        <br><br>
        <button type="submit" style="background:blue; color:white; padding:10px 20px;">Save Task</button>
        <a href="/tasks" style="margin-left:15px;">Back</a>
    </form>
</body>
</html>