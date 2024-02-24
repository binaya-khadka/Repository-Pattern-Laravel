@extends('layouts.app')

@section('content')
    <div>
        <a href="{{ route('create_task') }}" class="btn btn-primary float-right mt-5 mb-5">
            Add tasks
        </a>
        <table class="table w-100">
            <thead>
                <tr>
                    <th scope="col" style="width:20%">Title</th>
                    <th scope="col" style="width:40%">Description</th>
                    <th scope="col" style="width:20%">Completed</th>
                    <th scope="col" style="width: 20%">Action</th>
                </tr>
            </thead>
            <tbody>
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
                        <a class="btn btn-primary" href="{{ route('edit_task', $task->id) }}">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
