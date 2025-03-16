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
    <h1>Créer une Récompense</h1>
    <form action="{{ route('recompenses.store') }}" method="POST">
        @csrf
        <label for="utilisateur_id">Utilisateur ID</label>
        <input type="number" name="utilisateur_id" required>
        
        <label for="points_gagnes">Points Gagnés</label>
        <input type="number" name="points_gagnes" required>
        
        <button type="submit">Créer</button>
    </form>
@endsection
    
</body>
</html>