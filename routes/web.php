<?php
use App\Http\Controllers\DashboardPublieditController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RepositorioController;
use App\Http\Controllers\DashboardPublicationController;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

Route::get("/", [IndexController::class, "index"])->name("index");

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

Route::get('usuarios-cadastrados', [DashboardUserController::class, 'index'])->name('editaruser');
Route::get('publicacao-cadastradas', [DashboardPublieditController::class, 'index'])->name('editarpubli');

Route::prefix('dashboard-user')->middleware("auth")->group(function () {
    Route::get('/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/store', [UserController::class, 'store'])->name('user.store');
});