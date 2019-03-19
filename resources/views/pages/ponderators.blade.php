@extends('layout')



@section('title','Gestion des pondérateurs - TODOLIST Organizer')



@section('content')
<!-- ponderators.content -->

    <h1>Gestion des pondérateurs</h1>

    @include('parts.menu')

    <ul>
        @foreach ($ponderators as $ponderator)
            <li>
                {{ $ponderator->name }} ({{ $ponderator->coefficient }})
                <form method="POST" action="/ponderators/{{ $ponderator->id }}">

                    @method('DELETE')
                    @csrf

                    <div><button type="submit">Supprimer</button></div>

                </form>
            </li>
        @endforeach
    </ul>

    <a href="{!! url('ponderators/create') !!}">Nouveau Pondérateur</a>

<!-- /ponderators.content -->
@endsection
