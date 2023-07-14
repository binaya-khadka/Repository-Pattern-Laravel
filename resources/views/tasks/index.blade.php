@extends('layouts.app')

@section('content')

    <a href="{{ route('create_task') }}" class="btn btn-primary float-right mt-5 mb-5">
        Add tasks
    </a>
    <br />
    <br />
    <br />
    <table class="table w-100">
        <thead>
            <tr>
                <th scope="col" style="width:20%">Title</th>
                <th scope="col" style="width:50%">Description</th>
                <th scope="col" style="width:10%">Completed</th>
                <th scope="col" style="width:10%">view task</th>
                <th scope="col" style="width:10%">Delete</th>
            </tr>
        </thead>
        <tbody>

            @if ($tasks->count() !== 0)
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>
                            @if ($task->is_completed)
                                <span class="badge badge-success">Completed</span>
                            @else
                                <span class="badge badge-warning">Not completed</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('task_show', $task->id) }}" class="btn btn-primary">View</a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('delete_task', $task->id) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">No tasks found</td>
                </tr>
            @endif
        </tbody>
    </table>

@endsection
