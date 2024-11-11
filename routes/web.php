<?php

use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name("index");
Route::get('/sobrenos', [SobreNosController::class, "index"])->name("sobrenos");
Route::get('/devs', function () {
    return view('dev');
})->name("devs");
Route::get('/repositorio', function () {
    return view('repositorio');
})->name("repositorio");

Route::get('/mudarsenha', function () {
    return view('mudar-senha');
})->name("mudar-senha");

