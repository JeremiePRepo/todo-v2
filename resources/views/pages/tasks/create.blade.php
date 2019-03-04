@extends('layout')



@section('title','Nouvelle tâche - TODOLIST Organizer')



@section('content')
<!-- tasks.create.content -->

    <h1>Créer une nouvelle tâche</h1>

    <a href="/">Déconnexion</a>
    <a href="{!! url('todolist') !!}">Retour aux tâches</a>

    <form method="POST" action="/todolist">

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

        <div><textarea name="task" placeholder="Nouvelle tâche" required>{{ old('task') }}</textarea></div>
        <div><button type="submit">Nouvelle tâche</button></div>

    </form>

<!-- /tasks.create.content -->
@endsection
