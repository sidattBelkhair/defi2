<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MotsController; 
use App\Http\Controllers\RoleController;
use App\Http\Controllers\VarianteController;
use App\Http\Controllers\DocummentController;
use App\Http\Controllers\DefinitionController;
use App\Http\Controllers\RecompenseController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\MotsInconnuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UtilisateurController;

Route::view('/','login');
Route::post('/signup',[AuthController::class,"signup"]);
Route::post('/login',[AuthController::class,"login"]);
Route::get('/logout',[AuthController::class,"logout"]);

Route::middleware('auth')->group(function(){

    Route::get("profile",[UserController::class,'profile']);

    Route::resource('utilisateurs', UserController::class);
    Route::resource('mots', MotsController::class);
    Route::resource('definitions', DefinitionController::class);
    Route::resource('commentaires', CommentaireController::class);
    Route::resource('documents', DocummentController::class);
    Route::resource('recompenses', RecompenseController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('variantes', VarianteController::class);
    Route::resource('motsinconnus', MotsInconnuController::class);
});