<?php

namespace App\Http\Controllers;


use App\Models\todoapp;
use Illuminate\Http\Request;

class todoController extends Controller
{
    public function index()
    {

        $task = todoapp::get();
        return response()->json($task);
    }

    public function store(Request $request)
    {
        $task['task'] = $request->task;
        $task['is_done'] = false;
        $task = todoapp::create($task);
        return response($task);
    }

    public function update(todoapp $task)
    {
        $task->is_done = !$task->is_done;
        $task->save();
        return response($task);
    }

    public function destroy(todoapp $task)
    {
        $task->delete();
        return response(true);
    }
}
