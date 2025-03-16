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
    <h1>Détails de l'utilisateur</h1>
    <p>Nom : {{ $utilisateur->nom }}</p>
    <p>Points : {{ $utilisateur->points }}</p>
    <a href="{{ route('utilisateurs.index') }}">Retour</a>
@endsection
    
</body>
</html>