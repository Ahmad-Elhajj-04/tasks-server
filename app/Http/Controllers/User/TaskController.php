<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Services\TaskServices;

class TaskController extends Controller{
    
    function getAllTasks($id = null){
        if(!$id){
            return Task::all();
        }

        $task = Task::find($id);
        return $task;

        //$tasks = TaskService::getAllTasks();
        //return response()->json(["data" => $tasks]);
        //SERVICES NEVER RETURN JSON
        //TRY AND CATCH ARE IN CONTROLLERS

    }

}
