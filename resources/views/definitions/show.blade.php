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
    <h1>Détails de la Définition</h1>
    <p>Mot ID : {{ $definition->mot_id }}</p>
    <p>Définition : {{ $definition->definition }}</p>
    <a href="{{ route('definitions.index') }}">Retour</a>
@endsection
    
</body>
</html>