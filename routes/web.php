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
    ProfileController,
    SlideController
};

// 1. Home and Simple Pages
Route::get("/", [IndexController::class, "index"])->name("index");
Route::get('sobre-nos', [SobreNosController::class, "index"])->name("sobrenos");
Route::view("devs", "dev")->name("devs");
Route::view("mudar-senha", "reset-password")->name("mudar-senha");

// 2. Authentication
Route::prefix('auth')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate'])->name('login.process');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

// 3. Dashboard
Route::prefix('dashboard')->middleware("auth")->group(function () {
    Route::get('/', [DashboardController::class, "index"])->name("dashboard");

    // 3.1 Dashboard Publications
    Route::prefix('publication')->group(function () {
        Route::get('/', [DashboardPublicationController::class, 'index'])->name('dashboard-publication');
        Route::get('/create', [DashboardPublicationController::class, 'create'])->name('dashboard-publication.create');
        Route::post('/store', [DashboardPublicationController::class, 'store'])->name('dashboard-publication.store');
    });

    // 3.2 Dashboard Users
    Route::prefix('user')->group(function () {
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
    });

    // 3.3 User and Publication Editing
    Route::get('usuarios-cadastrados', [DashboardUserController::class, 'index'])->name('editaruser');
    Route::get('publicacao-cadastradas', [DashboardPublieditController::class, 'index'])->name('editarpubli');
});

// 4. Repositories
Route::get('/repositorio', [RepositorioController::class, 'showRepository'])->name('repositorio');

// 5. Articles
Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('articles.show');
});

// 6. Events
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'list'])->name('events.index');
    Route::get('/{id}', [EventController::class, 'details'])->name('events.details');
    Route::get('/create', [EventController::class, 'create'])->name('events.create'); // Formulário de criação
    Route::post('/store', [EventController::class, 'store'])->name('events.store'); // Salvar evento
    Route::get('/{id}/edit', [EventController::class, 'edit'])->name('events.edit'); // Formulário de edição
    Route::put('/{id}', [EventController::class, 'update'])->name('events.update'); // Atualizar evento
});



// 7. Developers
Route::resource('developers', DeveloperController::class)->middleware('auth');

// 8. Slides
Route::get('/slides', [SlideController::class, 'index']);

Route::get('/repositorio/search', [RepositorioController::class, 'search'])->name('repositorio.search');
