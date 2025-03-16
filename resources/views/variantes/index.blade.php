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
    <h1>Variantes</h1>
    <a href="{{ route('variantes.create') }}">Créer une Variante</a>
    <ul>
        @foreach ($variantes as $variante)
            <li>
                {{ $variante->variante }} ({{ $variante->type }}) 
                <a href="{{ route('variantes.edit', $variante) }}">Éditer</a>
                <form action="{{ route('variantes.destroy', $variante) }}" method="POST" style="display:inline;">
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