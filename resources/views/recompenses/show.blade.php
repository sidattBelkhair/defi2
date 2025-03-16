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
    <h1>Détails de la Récompense</h1>
    <p>Utilisateur ID : {{ $recompense->utilisateur_id }}</p>
    <p>Points Gagnés : {{ $recompense->points_gagnes }}</p>
    <a href="{{ route('recompenses.index') }}">Retour</a>
@endsection
    
</body>
</html>