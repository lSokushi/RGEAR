<?php
 
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::view("/", "index")->name("index");
 
Route::get('sobre-nos', [SobreNosController::class, "index"])->name("sobrenos");
 
Route::view("devs", "dev")->name("devs");

Route::view("repositorio", "repositorio")->name("repositorio");

Route::view("mudar-senha", "mudar-senha")->name("mudar-senha");
 
// Exibir o formulário de login (a view é exibida diretamente pelo controlador)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
 
// Processar o login
Route::post('login', [LoginController::class, 'authenticate'])->name('login.process');
 
// Fazer logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get("dashboard", [DashboardController::class,"index"])->name("dashboard");