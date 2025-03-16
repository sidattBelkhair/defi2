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
    <h1>Éditer l'utilisateur</h1>
    <form action="{{ route('utilisateurs.update', $utilisateur) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nom">Nom</label>
        <input type="text" name="nom" value="{{ $utilisateur->nom }}" required>
        
        <label for="mot_de_passe">Mot de passe</label>
        <input type="password" name="mot_de_passe" required>
        
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
    
</body>
</html>