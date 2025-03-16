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
    <h1>Créer un Commentaire</h1>
    <form action="{{ route('commentaires.store') }}" method="POST">
        @csrf
        <label for="mot_id">Mot ID</label>
        <input type="number" name="mot_id" required>

        <label for="utilisateur_id">Utilisateur ID</label>
        <input type="number" name="utilisateur_id" required>
        
        <label for="commentaire">Commentaire</label>
        <textarea name="commentaire" required></textarea>
        
        <button type="submit">Créer</button>
    </form>
@endsection
    
</body>
</html>