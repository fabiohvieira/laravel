<?php

namespace App\Services;

use App\Models\Task;
use App\Models\RolesTask;
use Illuminate\Support\Facades\Auth;

class TaskService 
{

    public static function getUserTasks($user) {
        
        $tasks = RolesTask::whereIn('role_id' ,Auth::user()->roles->pluck('role_id')->toArray())->pluck('task_id')->toArray();      

        if (Auth::user()->admin == 1) {
            $tasks = Task::whereNull('task_id')
                ->with('relations', 'relations.relations', 'relations.parent', 'relations.relations.relations')
                ->orderBy('order')
                ->orderBy('name')
                ->get()
                ->toArray();
        } else {
            $tasks = Task::whereNull('task_id')
                ->whereIn('id', $tasks)
                //->with('relations')
                ->with('relations', function ($query) use ($tasks) {
                    return $query->whereIn('id', $tasks);
                })
                ->orderBy('order')
                ->orderBy('name')
                ->get()
                ->toArray();            
        }

        return $tasks;

    }


}