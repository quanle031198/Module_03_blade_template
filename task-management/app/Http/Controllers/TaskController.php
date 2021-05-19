<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TaskController extends Controller
{
    public function index()
{
    $tasks = Task::all();
    return view('index', compact('tasks'));
}
}
