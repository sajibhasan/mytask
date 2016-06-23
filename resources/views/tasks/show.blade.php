@extends('master')
@section('content')

<div class="col-md-6">

    <h1>{{ $task->title }}</h1>
    <hr>
    <p class="lead">{{ $task->description }}</p>

    <a href="{{ url('tasks') }}" class="btn btn-info">Back to all tasks</a>
    <a href="{{ url('tasks', $task->id) }}" class="btn btn-primary">Edit Task</a>
</div>

@endsection