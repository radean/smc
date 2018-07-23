<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        //    $tasks = DB::table('tasks')->get();
        $tasks = Task::all();

        return view('task.index', compact('tasks'));
    }
}
