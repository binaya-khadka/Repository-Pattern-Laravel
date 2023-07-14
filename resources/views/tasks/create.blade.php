@extends('layouts.app')
@section('content')
    <form method='POST' action="{{ route('save_task') }}">
        {{ csrf_field() }}
        <h1> Create a new Task </h1>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name='title' placeholder="Enter the title">
        </div>
        <div class="form-group">
            <label for="description">Task description </label>
            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary ">Create New Task</button>
            <a href="{{ route('tasks') }}" class="btn btn-success float-right">Go Back</a>
        </div>

    </form>
@endsection
