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
    <h1>Détails du Rôle</h1>
    <p>Nom : {{ $role->nom }}</p>
    <a href="{{ route('roles.index') }}">Retour</a>
@endsection
    
</body>
</html>