<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        return Task::all();
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|unique:tasks|max:255',
            'description' => 'required',
        ]);

        $task = Task::create($validatedData);

        return response()->json($task, 201);
    }

    public function update(Request $request, Task $task) {
        $task->update($request->all());

        return response()->json($task, 200);
    }

    public function delete(Task $task) {
        $task->delete();

        return response()->json(null, 204);
    }
}
