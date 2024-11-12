<x-main-layout title="Login">
    @push('styles')
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    @endpush
    
    <div class="login-container">
        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <input type="email" name="email" id="email">
            <input type="password" name="password" id="password">
            <input type="submit" value="Cadastrar">

            
        </form>
    </div>
</x-main-layout>
