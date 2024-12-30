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
    RelatorioController,
    SobreNosController,
    UserController,
    ProfileController,
    SlideController,
    ConfiguracoesController,
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
        Route::get('/{id}/edit', [DashboardPublicationController::class, 'edit'])->name('dashboard-publication.edit');
        Route::put('/{id}', [DashboardPublicationController::class, 'update'])->name('dashboard-publication.update');
        Route::delete('/{id}', [DashboardPublicationController::class, 'destroy'])->name('dashboard-publication.destroy');
        Route::get('/{id}', [DashboardPublicationController::class, 'show'])->name('dashboard-publication.show');
    });

    // 3.2 Dashboard Users
    Route::prefix('user')->group(function () {
        Route::get('/', [DashboardUserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/{id}/edit', [DashboardUserController::class, 'edit'])->name('user.edit');
        Route::put('/{id}', [DashboardUserController::class, 'update'])->name('user.update');
        Route::delete('/{id}', [DashboardUserController::class, 'destroy'])->name('user.destroy');
    });

    // 3.3 User and Publication Editing
    Route::get('usuarios-cadastrados', [DashboardUserController::class, 'index'])->name('editaruser');
    Route::get('publicacao-cadastradas', [DashboardPublieditController::class, 'index'])->name('editarpubli');
    
    Route::prefix('usuarios')->middleware('auth')->group(function () {
        Route::get('/', [DashboardUserController::class, 'index'])->name('usuarios.index');
        Route::get('/{id}/edit', [DashboardUserController::class, 'edit'])->name('usuarios.edit');
        Route::put('/{id}', [DashboardUserController::class, 'update'])->name('usuarios.update');
        Route::delete('/{id}', [DashboardUserController::class, 'destroy'])->name('usuarios.destroy');
    });

    // 3.4 Dashboard Settings
    Route::post('/configuracoes/atualizar', [DashboardController::class, 'atualizarPerfil'])->name('configuracoes.atualizar');
    Route::post('/configuracoes/preferencias', [DashboardController::class, 'salvarPreferencias'])->name('configuracoes.preferencias');
    Route::post('/configuracoes/seguranca', [DashboardController::class, 'atualizarSenha'])->name('configuracoes.seguranca');


    Route::get('/relatorios', [RelatorioController::class, 'index'])->name('relatorios');


    Route::get('/dashboard/configuracoes', [ConfiguracoesController::class, 'index'])->name('configuracoes');

});


// 4. Repositories
Route::get('/repositorio', [RepositorioController::class, 'showRepository'])->name('repositorio');
Route::get('/repositorio/search', [RepositorioController::class, 'search'])->name('repositorio.search');


// 5. Articles
Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('articles.show');
});

// 6. Events
Route::prefix('events')->group(function () {
    Route::get('/', [EventController::class, 'list'])->name('events.index');
    Route::get('/{id}', [EventController::class, 'details'])->name('events.details');
    Route::get('/create', [EventController::class, 'create'])->name('events.create');
    Route::post('/store', [EventController::class, 'store'])->name('events.store');
    Route::get('/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::put('/{id}', [EventController::class, 'update'])->name('events.update');
});

// 7. Developers
Route::resource('developers', DeveloperController::class)->middleware('auth');

// 8. Slides
Route::get('/slides', [SlideController::class, 'index']);

// 9. Profile
Route::get('/perfil', [ProfileController::class, 'index'])->name('perfil');
Route::get('/perfil/editar', [ProfileController::class, 'edit'])->name('perfil.editar');
Route::put('/perfil/atualizar', [ProfileController::class, 'update'])->name('perfil.atualizar');

// 10. 404
Route::fallback(function () {
    return view('404');
});
