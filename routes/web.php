<?php
 
use App\Http\Controllers\SobreNosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
 
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
 
/ Exibir o formulário de login (a view é exibida diretamente pelo controlador)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
 
// Processar o login
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.process');
 
// Fazer logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
 
/*// Exibir o Dashboard, protegido por autenticação
Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard'); // Certifique-se de que existe uma view `dashboard.blade.php`
})->name('dashboard');*/

route::get('/dashboard',[DashboardController::class,'index'])->middleware("auth")->name("dashboard.index");