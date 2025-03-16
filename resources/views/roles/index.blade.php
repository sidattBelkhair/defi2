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
    <h1>Rôles</h1>
    <a href="{{ route('roles.create') }}">Créer un Rôle</a>
    <ul>
        @foreach ($roles as $role)
            <li>
                {{ $role->nom }} 
                <a href="{{ route('roles.edit', $role) }}">Éditer</a>
                <form action="{{ route('roles.destroy', $role) }}" method="POST" style="display:inline;">
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