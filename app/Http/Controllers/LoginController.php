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
        return view("auth.login");
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
            return redirect()->route('user.create');
        }

        throw ValidationException::withMessages([
            'email' => "Credenciais inválidas",
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