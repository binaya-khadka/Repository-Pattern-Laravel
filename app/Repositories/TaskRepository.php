<?php

namespace App\Repositories;

use App\Interfaces\TaskInterface;
use App\Models\Task;

class TaskRepository implements TaskInterface
{
    //
    public function getAllTasks()
    {
        return Task::all();
    }
    
    public function getTaskById($taskId)
    {
        return Task::findOrFail($taskId);
    }

    public function deleteTask($taskId)
    {        
        Task::destroy($taskId);
    }

    public function createTask(array $task)
    {   
        return Task::create($task);
    }

    public function updateTask($taskId, array $newDetails)
    {
        return Task::whereId($taskId)->update($newDetails);
    }  
}