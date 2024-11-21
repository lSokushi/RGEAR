<x-main-layout title="Login">
    @push('styles')
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    @endpush
    
    <div class="login-container">
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <input type="email" name="email" id="email" placeholder="Email">
            <input type="password" name="password" id="password" placeholder ="Senha">
            <input type="submit" value="Entrar">

            
        </form>
    </div>
</x-main-layout>