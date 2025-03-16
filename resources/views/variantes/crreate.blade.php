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
    <h1>Créer une Variante</h1>
    <form action="{{ route('variantes.store') }}" method="POST">
        @csrf
        <label for="variante">Variante</label>
        <input type="text" name="variante" required>
        
        <label for="type">Type</label>
        <input type="text" name="type" required>
        
        <label for="mot_id">Mot ID</label>
        <input type="number" name="mot_id" required>
        
        <button type="submit">Créer</button>
    </form>
@endsection
    
</body>
</html>