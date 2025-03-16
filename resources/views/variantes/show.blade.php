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
    <h1>Détails de la Variante</h1>
    <p>Variante : {{ $variante->variante }}</p>
    <p>Type : {{ $variante->type }}</p>
    <p>Mot ID : {{ $variante->mot_id }}</p>
    <a href="{{ route('variantes.index') }}">Retour</a>
@endsection
    
</body>
</html>