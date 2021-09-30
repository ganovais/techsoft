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
    }

    public function getTasks()
    {
       $task = new Task();
       return response()->json([
          'error' => false,
          'tasks' => $task->get()
       ]);
    }

}
