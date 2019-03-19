@extends('layout')



@section('title','Nouveau pondérateur - TODOLIST Organizer')



@section('content')
<!-- ponderators.create.content -->

    <h1>Créer un nouveau pondérateur</h1>

    @include('parts.menu')

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/ponderators">

        @csrf

        <div><textarea name="name" placeholder="Nouveau pondérateur" required>{{ old('name') }}</textarea></div>
        <div><input name="coefficient" type="number" min="1" max="10" value="1" required></div>
        <div><button type="submit">Créer la tâche</button></div>

    </form>

<!-- /ponderators.create.content -->
@endsection
