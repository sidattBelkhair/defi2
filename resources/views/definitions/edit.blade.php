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
    <h1>Éditer la Définition</h1>
    <form action="{{ route('definitions.update', $definition) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="mot_id">Mot ID</label>
        <input type="number" name="mot_id" value="{{ $definition->mot_id }}" required>
        
        <label for="definition">Définition</label>
        <textarea name="definition" required>{{ $definition->definition }}</textarea>
        
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
</body>
</html>