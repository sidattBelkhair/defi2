<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@extends('layouts.app')

@section('content')
    <h1>Utilisateurs</h1>
    <a href="{{ route('utilisateurs.create') }}">Créer un utilisateur</a>
    <ul>
        @foreach ($utilisateurs as $utilisateur)
            <li>
                {{ $utilisateur->nom }} 
                <a href="{{ route('utilisateurs.edit', $utilisateur) }}">Éditer</a>
                <form action="{{ route('utilisateurs.destroy', $utilisateur) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
    
</body>
</html>