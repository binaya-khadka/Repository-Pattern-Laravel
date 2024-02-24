<?php

namespace App\Interfaces;

interface TaskInterface
{
    public function getAllTasks();
    public function getTaskById($taskId);
    public function deleteTask($taskId);
    public function createTask(array $taskDetails);
    public function updateTask($taskId, array $newDetails);
}