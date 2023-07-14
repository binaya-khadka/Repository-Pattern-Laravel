@extends('layouts.app')

@section('content')
    <h1> Title </h1>
    <p> {{ $task->title }} </p>
    <h1> Description </h1>
    <p> {{ $task->description }} </p>
    <h3>
        <a href="{{ route('edit_task', $task->id) }}"> Edit this Task</a>
    </h3>
@endsection
