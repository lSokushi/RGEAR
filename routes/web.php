<?php
use App\Http\Controllers\RepositorioController;
use App\Http\Controllers\DashboardPublicationController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::view("/", "index")->name("index");

Route::get('sobre-nos', [SobreNosController::class, "index"])->name("sobrenos");

Route::view("devs", "dev")->name("devs");



Route::view("mudar-senha", "reset-password")->name("mudar-senha");

// Exibir o formulário de login (a view é exibida diretamente pelo controlador)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Processar o login
Route::post('login', [LoginController::class, 'authenticate'])->name('login.process');

// Fazer logout
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get("dashboard", [DashboardController::class, "index"])->middleware("auth")->name("dashboard");
Route::get('/dashboard-publication', [DashboardPublicationController::class, 'index'])->middleware("auth")->name('dashboard-publication');
Route::prefix('dashboard-publication')->middleware("auth")->group(function () {
    Route::get('/create', [DashboardPublicationController::class, 'create'])->name('dashboard-publication.create');
    Route::post('/store', [DashboardPublicationController::class, 'store'])->name('dashboard-publication.store');
});

Route::get('repositorio', [RepositorioController::class, 'index'])->name("repositorio");

Route::resource('developers', DeveloperController::class)->middleware('auth');
