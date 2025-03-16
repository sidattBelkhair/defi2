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
    <h1>Détails du Document</h1>
    <p>Nom du Fichier : {{ $document->nom_fichier }}</p>
    <p>Chemin du Fichier : {{ $document->chemin_fichier }}</p>
    <p>Date d'Import : {{ $document->date_import }}</p>
    <p>Utilisateur ID : {{ $document->utilisateur_id }}</p>
    <a href="{{ route('documents.index') }}">Retour</a>
@endsection
    
</body>
</html>