<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        // mengambil semua data task dari model task
        $tasks = Task::getAll();

        // mengirim data task ke dalam view
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function show($id){
        $task = Task::getId($id);

        return view('tasks.show', [
            'task' => $task
        ]);
    }
}
