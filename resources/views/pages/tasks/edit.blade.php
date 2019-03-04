@extends('layout')



@section('title','Édition - TODOLIST Organizer')



@section('content')
<!-- tasks.edit.content -->

    <h1>Éditer une tâche</h1>

    <a href="/">Déconnexion</a>
    <a href="{!! url('todolist') !!}">Retour aux tâches</a>

    <form method="POST" action="/todolist/{{ $task->id }}">

        @method('PATCH')
        @csrf

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div><textarea name="task" placeholder="Nouvelle tâche" required>{{ $task->task }}</textarea></div>
        <div><button type="submit">Enregistrer</button></div>

    </form>

    <form method="POST" action="/todolist/{{ $task->id }}">

        @method('DELETE')
        @csrf

        <div><button type="submit">Supprimer</button></div>

    </form>

<!-- /tasks.edit.content -->
@endsection
