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
    <h1>Récompenses</h1>
    <a href="{{ route('recompenses.create') }}">Créer une Récompense</a>
    <ul>
        @foreach ($recompenses as $recompense)
            <li>
                Utilisateur ID : {{ $recompense->utilisateur_id }}, Points Gagnés : {{ $recompense->points_gagnes }} 
                <a href="{{ route('recompenses.edit', $recompense) }}">Éditer</a>
                <form action="{{ route('recompenses.destroy', $recompense) }}" method="POST" style="display:inline;">
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