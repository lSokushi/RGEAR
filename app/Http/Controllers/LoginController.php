<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
 
class LoginController extends Controller
{
    // Exibir o formulário de login diretamente no controlador
    public function showLoginForm()
    {
        return response()->view('auth.login', [
            'html' => '
<html>
<head>
<title>Login</title>
</head>
<body>
<form method="POST" action="' . route('login.process') . '">
                        ' . csrf_field() . '
<label for="email">Email:</label>
<input type="email" name="email" required autofocus>
<br>
<label for="password">Senha:</label>
<input type="password" name="password" required>
<br>
<button type="submit">Login</button>
</form>
</body>
</html>
            '
        ]);
    }
 
    // Processar o login
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard'); // Redireciona para o Dashboard
        }
 
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }
 
    // Fazer logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/login'); // Redireciona para a página de login após logout
    }
}