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
    <h1>Créer un Rôle</h1>
    <form action="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="nom">Nom du Rôle</label>
        <input type="text" name="nom" required>
        
        <button type="submit">Créer</button>
    </form>
@endsection
    
</body>
</html>