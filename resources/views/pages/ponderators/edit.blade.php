@extends('layout')



@section('title','Édition - TODOLIST Organizer')



@section('content')
<!-- ponderators.edit.content -->

    <h1>Éditer un pondérateur</h1>

    <a href="/">Déconnexion</a>
    <a href="{!! url('todolist') !!}">Retour aux tâches</a>

    <form method="POST" action="/todolist/{{ $ponderator->id }}">

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

        <div><textarea name="ponderator" placeholder="Nouvelle tâche" required>{{ $ponderator->name }}</textarea></div>
        <p>[coefficient]</p>
        <div><button type="submit">Enregistrer</button></div>

    </form>

    <form method="POST" action="/todolist/{{ $ponderator->id }}">

        @method('DELETE')
        @csrf

        <div><button type="submit">Supprimer le pondérateur</button></div>

    </form>

<!-- /ponderators.edit.content -->
@endsection
