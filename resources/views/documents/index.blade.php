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
    <h1>Documents</h1>
    <a href="{{ route('documents.create') }}">Créer un Document</a>
    <ul>
        @foreach ($documents as $document)
            <li>
                {{ $document->nom_fichier }} 
                <a href="{{ route('documents.edit', $document) }}">Éditer</a>
                <form action="{{ route('documents.destroy', $document) }}" method="POST" style="display:inline;">
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