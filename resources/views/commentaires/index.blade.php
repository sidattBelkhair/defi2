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
    <h1>Commentaires</h1>
    <a href="{{ route('commentaires.create') }}">Créer un Commentaire</a>
    <ul>
        @foreach ($commentaires as $commentaire)
            <li>
                {{ $commentaire->commentaire }} 
                <a href="{{ route('commentaires.edit', $commentaire) }}">Éditer</a>
                <form action="{{ route('commentaires.destroy', $commentaire) }}" method="POST" style="display:inline;">
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