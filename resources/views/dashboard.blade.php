<x-internal-layout title="Dashboard">
<body>
  <main class="container-fluid w-100">
    <div class="row flex">
      <aside class="col-md-2 bg-dark text-white p-4 d-flex flex-column">
        <div class="d-flex align-items-center gap-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-fill"
            viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
          </svg>
          <h2 class="fs-1 w-100">{{Auth()->user()->name}}</h2>
        </div>
        <div class="divider"></div>
        <nav class="flex-grow-1 h-100">
          <p class="d-inline-flex gap-1 mt-5">
            <a class="btn text-light collapsed fs-2" data-bs-toggle="collapse" href="#collapseExample" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              Cadastrar
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path
                  d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
              </svg>
            </a>
          </p>
          <div class="collapse mb-4" id="collapseExample">
            <div class="card card-body border">
              <a href="#" onclick="showSection('usuario')">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-person-add" viewBox="0 0 16 16">
                  <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                  <path
                    d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                </svg>
                Usuário
              </a>
              <a href="{{route("dashboard-publication")}}"  onclick="showSection('publicacoes')">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-check2-square" viewBox="0 0 16 16">
                  <path
                    d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z" />
                  <path
                    d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0" />
                </svg>
                Publicação
              </a>              
            </div>
          </div>
          <br>
          <p class="d-inline-flex gap-1 mt-5">
            <a class="btn text-light collapsed fs-2" data-bs-toggle="collapse" href="#collapse2Example" role="button"
              aria-expanded="false" aria-controls="collapseExample">
              Ver Publicados
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path
                  d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
              </svg>
            </a>
          </p>
          <div class="collapse mb-4" id="collapse2Example">
            <div class="card card-body  border-0">
              <a href="{{route("editaruser")}}" onclick="showSection('usuario')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-person-add" viewBox="0 0 16 16">
                  <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4" />
                  <path
                    d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z" />
                </svg>
                Usuários
              </a>
              <a href="{{route("editarpubli")}}"  onclick="showSection('publicacoes')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-check2-square" viewBox="0 0 16 16">
                  <path
                    d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z" />
                  <path
                    d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0" />
                </svg>
                Publicações
              </a>
            </div>
          </div>

        </nav>
        <button
          class="button__exit mt-auto w-100 fs-3 p-4 rounded-3 border-0 text-light d-flex gap-4 justify-content-center align-items-center">
          <i class="bi bi-box-arrow-right"></i><a href="{{route('logout')}}" class="text-light text-decoration-none">Sair</a>
        </button>
      </aside>  

      <section class="col-md-10 bg-light" class="createUser">
        <div class="p-4 container-fluid">
          <h1 class="mb-4 text-dark w-100">Usuário</h1>
          @if ($errors->any())
            @foreach ($errors->all() as $error)
              <div class="alert alert-danger">
                {{$error}}
              </div>
            @endforeach
          @endif
          @if (Session::has("sucess"))
            <div class="alert alert-sucess">
              {{Session::get('sucess')}}
            </div>
          @endif
          <div class="bg-white p-4 shadow-sm rounded">
            <form action="{{ route('user.store') }}" method="POST">
              @csrf
              <div class="col-md-6">
                <label for="inputName4" class="form-label fs-3">Nome Completo</label>
                <input type="text" class="form-control h-75 fs-3" id="inputName4" placeholder="Maria Santana" name = "name"/>
              </div>
              <div class="col-md-6">
                <label for="inputCPF4" class="form-label fs-3">CPF</label>
                <input type="text" class="form-control h-75 fs-3" id="inputCPF4" placeholder="123.456.789-12" name = "cpf" />
              </div>

             <!--  <div class="col-md-6">
                <label for="inputTel" class="form-label fs-3">Telefone</label>
                <input type="tel" class="form-control h-75 fs-3" id="inputTel" placeholder="55 5555-5555" />
              </div> -->
              <div class="col-md-6">
                <label for="inputEmail" class="form-label fs-3">E-mail</label>
                <input type="email" class="form-control h-75 fs-3" id="inputEmail" placeholder="example@email.com" name ="email" />
              </div>

              <div class="col-md-3">
                <fieldset class="mb-3">
                  <legend class="col-form-label pt-0 fs-3">Tipo de Usuário</legend>
               
                  @foreach ($roles as $role)
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="role_id" id="{{$role->name}}" value="{{$role->id}}"
                        checked required/>
                      <label class="form-check-label fs-3" for="{{$role->name}}">{{$role->name}}</label>
                    </div>
                  @endforeach
                </fieldset>
              </div>

             <!-- <div class="col-md-3">
                <fieldset class="mb-3">
                  <legend class="col-form-label pt-0 fs-3">Linha de Pesquisa</legend>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="researchLine" id="researchLine1"
                      value="automation" checked />
                    <label class="form-check-label fs-3" for="researchLine1">Automação e Robótica Educacional</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="researchLine" id="researchLine2"
                      value="engineering" />
                    <label class="form-check-label fs-3" for="researchLine2">Engenharia e IA Aplicada</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="researchLine" id="researchLine3"
                      value="computing" />
                    <label class="form-check-label fs-3" for="researchLine3">Computação, Educação e
                      Sustentabilidade</label>
                  </div>
                </fieldset>
              </div>
 -->
              <div class="col-md-6">
                <label for="inputPassword" class="form-label fs-3">Senha</label>
                <input type="password" class="form-control p-3 fs-3" id="inputPassword" placeholder="Ex: 1234" name="password" />

                <div class="password-tips d-flex flex-column gap-1 mt-3 d-none">
                  <p class="tip-password fw-medium">Sua senha deve conter</p>
                  <ul class="list-unstyled">
                    <li class="fw-medium">
                      <i class="bi bi-x-circle-fill text-danger"></i> de 8 à 12 caracteres
                    </li>
                    <li class="fw-medium">
                      <i class="bi bi-x-circle-fill text-danger"></i> letra minúscula
                    </li>
                    <li class="fw-medium">
                      <i class="bi bi-x-circle-fill text-danger"></i> letra maiúscula
                    </li>
                    <li class="fw-medium">
                      <i class="bi bi-x-circle-fill text-danger"></i> número
                    </li>
                    <li class="fw-medium">
                      <i class="bi bi-x-circle-fill text-danger"></i> símbolos (Ex: !@#%$)
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-12 text-end">
                <button type="submit" class="border-0 rounded text-light fs-3 shadow p-3">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
      </section>

      
    </div>
  </main>

  <script {{ asset('/public/js/dashboard.js') }}></script>
  
</body>

</html>
</x-internal-layout-title>