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
    <h1>Définitions</h1>
    <a href="{{ route('definitions.create') }}">Créer une définition</a>
    <ul>
        @foreach ($definitions as $definition)
            <li>
                {{ $definition->definition }} 
                <a href="{{ route('definitions.edit', $definition) }}">Éditer</a>
                <form action="{{ route('definitions.destroy', $definition) }}" method="POST" style="display:inline;">
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