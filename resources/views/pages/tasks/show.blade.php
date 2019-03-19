@extends('layout')



@section('title','Tâche {{ $task->id }} - TODOLIST Organizer')



@section('content')
<!-- tasks.show.content -->

    <h1>Tâche {{ $task->id }}</h1>

    @include('parts.menu')

    <p>{{ $task->task }}</p>

    <a href="/todolist/{{ $task->id }}/edit">Éditer</a>

<!-- /tasks.show.content -->
@endsection
