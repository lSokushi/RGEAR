<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ArticleController,
    DashboardController,
    DashboardPublicationController,
    DashboardPublieditController,
    DashboardUserController,
    DeveloperController,
    EventController,
    IndexController,
    LoginController,
    RepositorioController,
    SobreNosController,
    UserController,

};

// Página inicial
Route::get("/", [IndexController::class, "index"])->name("index");

// Sobre nós
Route::get('sobre-nos', [SobreNosController::class, "index"])->name("sobrenos");

// Páginas simples
Route::view("devs", "dev")->name("devs");
Route::view("mudar-senha", "reset-password")->name("mudar-senha");

// Autenticação
Route::prefix('auth')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate'])->name('login.process');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

// Dashboard
Route::prefix('dashboard')->middleware("auth")->group(function () {
    Route::get('/', [DashboardController::class, "index"])->name("dashboard");

    // Publicações no dashboard
    Route::prefix('publication')->group(function () {
        Route::get('/', [DashboardPublicationController::class, 'index'])->name('dashboard-publication');
        Route::get('/create', [DashboardPublicationController::class, 'create'])->name('dashboard-publication.create');
        Route::post('/store', [DashboardPublicationController::class, 'store'])->name('dashboard-publication.store');
    });

    // Usuários no dashboard
    Route::prefix('user')->group(function () {
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
    });

    // Edição de usuários e publicações
    Route::get('usuarios-cadastrados', [DashboardUserController::class, 'index'])->name('editaruser');
    Route::get('publicacao-cadastradas', [DashboardPublieditController::class, 'index'])->name('editarpubli');
});

// Repositório
Route::get('repositorio', [ArticleController::class, 'repository'])->name('articles.repository');


Route::get('/repositorio', [ArticleController::class, 'repository'])->name('repositorio');


// Artigos
Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('articles.show');
});

// Eventos
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'list'])->name('events.index');
    Route::get('/{id}', [EventController::class, 'details'])->name('events.details');
});

// Desenvolvedores
Route::resource('developers', DeveloperController::class)->middleware('auth');
