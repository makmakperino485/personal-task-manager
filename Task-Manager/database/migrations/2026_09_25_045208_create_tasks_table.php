<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Task ID - Auto increment
            $table->string('task_name'); // Name of the task
            $table->text('description')->nullable(); // Task details
            $table->string('status')->default('Pending'); // Pending / Completed / In Progress
            $table->date('due_date')->nullable(); // Task deadline
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};