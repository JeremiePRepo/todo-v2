@extends('layout')



@section('title','Nouvelle tâche - TODOLIST Organizer')



@section('content')
<!-- tasks.create.content -->

    <h1>Créer une nouvelle tâche</h1>

    <a href="/">Déconnexion</a>
    <a href="{!! url('todolist') !!}">Retour aux tâches</a>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/todolist">

        @csrf

        <div><textarea name="task" placeholder="Nouvelle tâche" required>{{ old('task') }}</textarea></div>
        <div>
            @foreach ($ponderators as $ponderator)
                <label for="ponderator[{{ $ponderator->id }}]"><input type="checkbox" name="ponderator[{{ $ponderator->id }}]"> {{ $ponderator->name }}</label>
            @endforeach
        </div>
        <div><button type="submit">Créer la tâche</button></div>


    </form>

<!-- /tasks.create.content -->
@endsection
