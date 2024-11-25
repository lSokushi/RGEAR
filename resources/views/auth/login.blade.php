
<x-main-layout title="Login">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}" />
    <div class="login-container">
        <p></p>
        <!-- Formulário de Login -->
        <div class="login-box" id="loginForm">
            <div class="login-form">
                <h2>Login</h2>
                <p>Acesso ao Repositório Acadêmico</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="jane.doe@gmail.com" required />

                    <label for="password">Senha</label>
                    <div class="password-container">
                        <input type="password" id="password" name="password" placeholder="******" required />
                        <button type="button" id="togglePassword" class="toggle-password">&#128065;</button>
                    </div>

                    <div class="options">
                        <label>
                            <input type="checkbox" name="remember" /> Mantenha-se Conectado
                        </label>
                        <a href="#" class="forgot-password">Esqueceu a senha?</a>
                    </div>
                    <button type="submit" class="login-button">Login</button>
                </form>
            </div>
            {{-- <div class="logo-container">
                <img src="{{ asset('img/icon-rgear.png') }}" alt="Logo RGear" class="logo-img" />
            </div> --}}
        </div>

        <!-- Formulário de Recuperação de Senha -->
        <div class="login-box" id="passwordRecoveryForm" style="display: none;">
            <div class="login-form">
                <h2>Recuperação de Senha</h2>
                <p>Insira o e-mail associado à sua conta para recuperar a senha</p>
                <form id="formRecovery">
                    <label for="inputRecoveryEmail">Email</label>
                    <input type="email" id="inputRecoveryEmail" name="email"
                        placeholder="Digite seu e-mail institucional" required />
                    <button type="button" class="login-button" onclick="sendRecoveryEmail()">Enviar</button>
                </form>
                <div class="text-center mt-3">
                    <button type="button" class="btn-link text-decoration-none text-primary" onclick="toggleForms()">
                        Voltar ao Login
                    </button>
                </div>
            </div>
        </div>
    </div>

    @yield('scripts')
    <script>
        function toggleForms() {
            const loginForm = document.getElementById('loginForm');
            const recoveryForm = document.getElementById('passwordRecoveryForm');

            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                recoveryForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                recoveryForm.style.display = 'block';
            }
        }

        function sendRecoveryEmail() {
            const emailInput = document.getElementById('inputRecoveryEmail');
            const email = emailInput.value;

            if (!email) {
                alert('Por favor, insira um e-mail válido.');
                return;
            }

            alert(`Um link de recuperação foi enviado para o e-mail: ${email}`);
            toggleForms();
        }

        // Adicionando evento ao link "Esqueceu a senha?"
        document.querySelector('.forgot-password').addEventListener('click', function(event) {
            event.preventDefault();
            toggleForms();
        });
    </script>
<script></script>
</x-main-layout>
