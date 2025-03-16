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
    <h1>Créer un Document</h1>
    <form action="{{ route('documents.store') }}" method="POST">
        @csrf
        <label for="nom_fichier">Nom du Fichier</label>
        <input type="text" name="nom_fichier" required>
        
        <label for="chemin_fichier">Chemin du Fichier</label>
        <input type="text" name="chemin_fichier" required>
        
        <label for="date_import">Date d'Import</label>
        <input type="date" name="date_import" required>
        
        <label for="utilisateur_id">Utilisateur ID</label>
        <input type="number" name="utilisateur_id" required>
        
        <button type="submit">Créer</button>
    </form>
@endsection
    
</body>
</html>