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
    <h1>Éditer la Variante</h1>
    <form action="{{ route('variantes.update', $variante) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="variante">Variante</label>
        <input type="text" name="variante" value="{{ $variante->variante }}" required>
        
        <label for="type">Type</label>
        <input type="text" name="type" value="{{ $variante->type }}" required>
        
        <label for="mot_id">Mot ID</label>
        <input type="number" name="mot_id" value="{{ $variante->mot_id }}" required>
        
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
    
</body>
</html>