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
    <h1>Éditer le Rôle</h1>
    <form action="{{ route('roles.update', $role) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nom">Nom du Rôle</label>
        <input type="text" name="nom" value="{{ $role->nom }}" required>
        
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
    
</body>
</html>