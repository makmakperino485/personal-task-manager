# Personal Task Manager - TaskFlow

Project Code: WST21-PM-2026-SF
Student Name: [PERINO , MARK RYAN P.]
Course & Year: [SECTION - 2 , 2ND YEAR BSIT]
Database Used: SQLite (Laravel Default) - Also supports MySQL
Submitted: 26 SEP 2026

## Features:
- Add Task - Create new task with name, description, due date, status
- View Tasks - Show all tasks with stats (Total / Pending / Done)
- View Single Task - Detailed view with created_at and updated_at
- Edit Task - Update task details
- Delete Task - Remove task with confirmation
- Update Status - Dropdown to change status (Pending / In Progress / Completed) directly from list

## How to Run:
cd Task-Manager
composer install
php artisan migrate
php artisan config:clear
php artisan serve --host=0.0.0.0 --port=8000

Then open: https://YOUR-CODESPACE-URL-8000.app.github.dev/tasks
