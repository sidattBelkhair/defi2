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
    <h1>Créer une Définition</h1>
    <form action="{{ route('definitions.store') }}" method="POST">
        @csrf
        <label for="mot_id">Mot ID</label>
        <input type="number" name="mot_id" required>
        
        <label for="definition">Définition</label>
        <textarea name="definition" required></textarea>
        
        <button type="submit">Créer</button>
    </form>
@endsection
    
</body>
</html>