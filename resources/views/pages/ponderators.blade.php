@extends('layout')



@section('title','Gestion des pondérateurs - TODOLIST Organizer')



@section('content')
<!-- ponderators.content -->

    <h1>Gestion des pondérateurs</h1>

    <a href="/">Déconnexion</a>
    <a href="{!! url('todolist') !!}">Retour aux tâches</a>

    <ul>
        @foreach ($ponderators as $ponderator)
            <li>
                {{ $ponderator->name }} ({{ $ponderator->coefficient }})
            </li>
        @endforeach
    </ul>

    <a href="{!! url('ponderators/create') !!}">Nouveau Pondérateur</a>

<!-- /ponderators.content -->
@endsection
