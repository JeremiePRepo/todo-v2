@extends('layout')



@section('title','Nouveau pondérateur - TODOLIST Organizer')



@section('content')
<!-- ponderators.create.content -->

    <h1>Créer un nouveau pondérateur</h1>

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

    <form method="POST" action="/ponderators">

        @csrf

        <p>Ici bientôt un formulaire de création de pondérateur.</p>
        {{-- <div><textarea name="task" placeholder="Nouvelle tâche" required>{{ old('task') }}</textarea></div>
        <div>
            <label for="1"><input type="checkbox" name="1"> Travail</label>
            <label for="2"><input type="checkbox" name="2"> Loisirs</label>
        </div>
        <div><button type="submit">Créer la tâche</button></div> --}}


    </form>

<!-- /ponderators.create.content -->
@endsection
