<x-main-layout title="Login">

    <!-- 1. CSS -->
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}" />

    <!-- 2. Container Principal -->
    <div class="login-container">

        <!-- 2.1 Formulário de Login -->
        <div class="login-container">
            <div class="login-box">
                <!-- 2.1 Formulário de Login -->
                <div class="login-form">
                    <h2>Login</h2>
                    <p>Acesso ao Repositório Acadêmico</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="admin@example.com" required />
        
                        <label for="password">Senha</label>
                        <div class="password-container">
                            <input type="password" id="password" name="password" placeholder="******" required />
                            <button type="button" id="togglePassword" class="toggle-password">&#128065;</button>
                        </div>
        
                        <div class="options">
                            <label class="remember-me">
                                <input type="checkbox" /> Mantenha-se Conectado
                            </label>
                            <a href="#" class="forgot-password">Esqueceu a senha?</a>
                        </div>
                        <button type="submit" class="login-button">Login</button>
                    </form>
                </div>
        
                <!-- 2.2 Imagem ao Lado -->
                <div class="login-image">
                    <img src="{{ asset('img/1-icon-rgear.png') }}" alt="Imagem representativa do RGEAR" />
                </div>
            </div>
        </div>
        <!-- 2.2 Formulário de Recuperação de Senha -->
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

    <!-- 3. Scripts -->
    @yield('scripts')
    <script>
        // 3.1 Alternar entre Formulários
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

        // 3.2 Enviar Email de Recuperação
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

        // 3.3 Adicionar Evento ao Link "Esqueceu a senha?"
        document.querySelector('.forgot-password').addEventListener('click', function(event) {
            event.preventDefault();
            toggleForms();
        });
    </script>
</x-main-layout>
