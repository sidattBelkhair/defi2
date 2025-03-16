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
    <h1>Éditer la Récompense</h1>
    <form action="{{ route('recompenses.update', $recompense) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="utilisateur_id">Utilisateur ID</label>
        <input type="number" name="utilisateur_id" value="{{ $recompense->utilisateur_id }}" required>
        
        <label for="points_gagnes">Points Gagnés</label>
        <input type="number" name="points_gagnes" value="{{ $recompense->points_gagnes }}" required>
        
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
    
</body>
</html>