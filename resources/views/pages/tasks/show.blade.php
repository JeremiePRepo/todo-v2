@extends('layout')



@section('title','Tâche {{ $task->id }} - TODOLIST Organizer')



@section('content')
<!-- tasks.edit.content -->

    <h1>Tâche {{ $task->id }}</h1>

    <a href="/">Déconnexion</a>
    <a href="{!! url('todolist') !!}">Retour aux tâches</a>

    <p>{{ $task->task }}</p>

    <a href="/todolist/{{ $task->id }}/edit">Éditer</a>

<!-- /tasks.edit.content -->
@endsection
