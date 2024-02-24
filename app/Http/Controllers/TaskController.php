<?php

namespace App\Http\Controllers;

use App\Repositories\TaskRepository;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected TaskRepository $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        $tasks = $this->taskRepository->getAllTasks();

        return view('tasks.index', ['tasks' =>  $tasks]);
    }

    // Getting details of all Tasks
    public function create()
    {
        return view('tasks.create');
    }

    // Getting details of single edit Task
    public function edit(Request $request)
    {
        $id = $request->route('taskId');

        $task = $this->taskRepository->getTaskById($id);

        if(!$task) {
            return back();
        }

        return view('tasks.edit', ['task' => $task]);
    }

    // Storing a new task
    public function store(Request $request)
    {
        $taskDetails = [
            'title' => $request->title,
            'description' => $request->description
        ];

        $this->taskRepository->createTask($taskDetails);

        return redirect()->Route('tasks');
    }

    // Getting details of single Task
    public function show(Request $request)
    {
        $taskId = $request->route('taskId');

        $task = $this->taskRepository->getTaskById($taskId);

        if (empty($task)) {
            return back();
        }

        return view('tasks.show', ['task' => $task]);
    }

    public function update(Request $request)
    {
        $taskId = $request->route('taskId');

        $taskDetails = [
            'title' => $request->title,
            'description' => $request->description
        ];

         if (isset($request->is_completed)) {
            $taskDetails['is_completed'] = true;
        } else {
            $taskDetails['is_completed'] = false;
        }
        
        $this->taskRepository->updateTask($taskId, $taskDetails);

        return redirect()->Route('tasks');
    }

    public function destroy(Request $request)
    {
        $taskId = $request->route('taskId');

        $this->taskRepository->deleteTask($taskId);

        return back();
    }
}