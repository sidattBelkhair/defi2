<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotController;
use App\Http\Controllers\DefinitionController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RecompenseController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\VarianteController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\MotsInconnuController;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('utilisateurs', UtilisateurController::class);
Route::resource('mots', MotController::class);
Route::resource('definitions', DefinitionController::class);
Route::resource('commentaires', CommentaireController::class);
Route::resource('documents', DocumentController::class);
Route::resource('recompenses', RecompenseController::class);
Route::resource('roles', RoleController::class);
Route::resource('variantes', VarianteController::class);
Route::resource('motsinconnus', MotsInconnuController::class);