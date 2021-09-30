<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
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
            'message' => 'Tarefa criada com sucesso',
            'task' => $task
        ]);
    }

    public function getTasks(Request $request)
    {
        $task = new Task();
        return response()->json([
            'error' => false,
            'message' => 'Tarefa criada com sucesso',
            // 'tasks' => $this->task_model->where('description', 'Gabriel')->get()->first()
            'tasks' => $task->get()
        ]);
    }

    public function deleteTask($id)
    {
        $task = new Task();
        $task = $task->findOrFail($id);
        $task->delete();

        return response()->json([
            'error' => false,
            'message' => 'Tarefa excluída com sucesso',
        ]);
    }
}
