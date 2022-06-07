<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\TVController;

Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/movies',[MoviesController::class,'index'])->name('movies.index');
Route::get('/movies/{movie}',[MoviesController::class,'show'])->name('movies.show');

Route::get('/actors',[ActorsController::class,'index'])->name('actors.index');
Route::get('/actors/page/{page?}',[ActorsController::class,'index']);
Route::get('/actors/{actor}',[ActorsController::class,'show'])->name('actors.show');


Route::get('/tv',[TVController::class, 'index'])->name('tv.index');
Route::get('/tv/{movie}',[TVController::class, 'show'])->name('tv.show');