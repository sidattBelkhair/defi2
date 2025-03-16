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
    <h1>Détails du Commentaire</h1>
    <p>Mot ID : {{ $commentaire->mot_id }}</p>
    <p>Utilisateur ID : {{ $commentaire->utilisateur_id }}</p>
    <p>Commentaire : {{ $commentaire->commentaire }}</p>
    <a href="{{ route('commentaires.index') }}">Retour</a>
@endsection
    
</body>
</html>