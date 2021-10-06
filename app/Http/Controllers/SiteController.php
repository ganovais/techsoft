<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class SiteController extends Controller
{
    public function saveTask(Request $request)
    {
        $task = new Task();
        $task->fill($request->toArray());
        $task->save();

        return response()->json([
         'error' => false,
         'task' => $task
      ]);
    }

    public function getTasks()
    {
       $task = new Task();
       return response()->json([
          'error' => false,
          'tasks' => $task->get()
       ]);
    }

    public function updateTask($id, Request $request)
    {
       $task = new Task();
       $task = $task->findOrFail($id);
       $task->fill($request->toArray());
       $task->save();

       return response()->json([
          'error' => false
       ]);
    }

    public function handleCheckTask($id)
    {
       $task = new Task();
       $task = $task->findOrFail($id);

       $task->update(['checked' => !$task->checked]);

       return response()->json([
          'error' => false,
          'checked' => $task->checked
       ]);
    }

    public function deleteTask($id)
    {
       $task = new Task();
       $task = $task->findOrFail($id);
       $task->delete();

       return response()->json([
          'error' => false
       ]);
    }

}
