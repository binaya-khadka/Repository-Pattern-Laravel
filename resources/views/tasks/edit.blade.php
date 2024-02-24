@extends('layouts.app')

@section('content')
    <div style="">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <h1> Edit Task </h1>
            <form method="POST" action="{{ route('update_task', $task->id) }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name='title' value="{{ $task->title }}">
                </div>
                <div class="form-group">
                    <label for="description">Task description </label>
                    <textarea class="form-control" name="description" id="description" rows="3">{{ $task->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" id="status" name="is_completed">
                        <option value="0" {{ $task->is_completed == 0 ? 'selected' : '' }}>Pending</option>
                        <option value="1" {{ $task->is_completed == 1 ? 'selected' : '' }}>Completed</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary ">Update Task</button>
                    <a href="{{ route('task_show', $task->id) }}" class="btn btn-success float-right">Go Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
