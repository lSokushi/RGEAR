<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    DashboardPublicationController,
    DashboardPublieditController,
    DashboardUserController,
    RelatorioController,
    ConfiguracoesController
};

Route::prefix('dashboard')->middleware("auth")->group(function () {
    Route::get('/', [DashboardController::class, "index"])->name("dashboard");

    // Dashboard Publications
    Route::prefix('publication')->group(function () {
        Route::get('/', [DashboardPublicationController::class, 'index'])->name('dashboard-publication');
        Route::get('/create', [DashboardPublicationController::class, 'create'])->name('dashboard-publication.create');
        Route::post('/store', [DashboardPublicationController::class, 'store'])->name('dashboard-publication.store');
        Route::get('/{id}/edit', [DashboardPublicationController::class, 'edit'])->name('dashboard-publication.edit');
        Route::put('/{id}', [DashboardPublicationController::class, 'update'])->name('dashboard-publication.update');
        Route::delete('/{id}', [DashboardPublicationController::class, 'destroy'])->name('dashboard-publication.destroy');
        Route::get('/{id}', [DashboardPublicationController::class, 'show'])->name('dashboard-publication.show');
    });

    // Dashboard Users
    Route::prefix('user')->group(function () {
        Route::get('/', [DashboardUserController::class, 'index'])->name('user.index');
        Route::get('/create', [DashboardUserController::class, 'create'])->name('user.create');
        Route::post('/store', [DashboardUserController::class, 'store'])->name('user.store');
        Route::get('/{id}/edit', [DashboardUserController::class, 'edit'])->name('user.edit');
        Route::put('/{id}', [DashboardUserController::class, 'update'])->name('user.update');
        Route::delete('/{id}', [DashboardUserController::class, 'destroy'])->name('user.destroy');
    });

    // Dashboard Configurations
    Route::post('/configuracoes/atualizar', [DashboardController::class, 'atualizarPerfil'])->name('configuracoes.atualizar');
    Route::post('/configuracoes/preferencias', [DashboardController::class, 'salvarPreferencias'])->name('configuracoes.preferencias');
    Route::post('/configuracoes/seguranca', [DashboardController::class, 'atualizarSenha'])->name('configuracoes.seguranca');

    Route::get('/relatorios', [RelatorioController::class, 'index'])->name('relatorios');
    Route::get('/dashboard/configuracoes', [ConfiguracoesController::class, 'index'])->name('configuracoes');
});
