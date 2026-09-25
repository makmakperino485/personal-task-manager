<!DOCTYPE html>
<html>
<head>
    <title>Personal Task Manager</title>
    <style>
        body { font-family: Arial; max-width: 800px; margin: 20px auto; background: #f5f5f5; }
        .container { background: white; padding: 20px; border-radius: 10px; }
        .btn { padding: 8px 15px; text-decoration: none; border-radius: 5px; color: white; display: inline-block; }
        .btn-blue { background: #3b82f6; }
        .btn-green { background: #22c55e; }
        .btn-red { background: #ef4444; }
        .btn-gray { background: #6b7280; }
        .card { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 8px; display: flex; justify-content: space-between; }
        .completed { background: #dcfce7; }
        .pending { background: #fff; }
        .done { text-decoration: line-through; }
        .form-box { margin-top: 20px; }
        input, textarea, select { width: 100%; padding: 8px; margin: 5px 0 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>📝 Personal Task Manager</h1>
        @if(session('success'))
            <div style="background: #dcfce7; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>