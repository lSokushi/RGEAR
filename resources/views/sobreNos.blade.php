<x-main-layout title="RGEAR">
  <link rel="stylesheet" href="{{ asset('/css/sobre-nos.css') }}" />
  <link rel="stylesheet" href="{{ asset('/public/css/') }}" />

  <main>
      <!-- 1. Seção: Quem Somos -->
      <section class="mt-5 container">
          <h2 class="mb-3 text-primary">Quem Somos</h2>
          <p class="lead">
              O <strong>RGEAR</strong> (Grupo de Pesquisa em Engenharia, Inteligência Artificial e Robótica Aplicadas) foi fundado em <strong>2018</strong>, no Instituto Federal da Bahia (IFBA), com o objetivo de integrar ciência, tecnologia e educação.
          </p>
          <p>
              Desde sua criação, o grupo tem ampliado suas áreas de atuação, incorporando novas tecnologias e promovendo impacto social por meio de projetos interdisciplinares e sustentáveis.
          </p>
          <h3 class="mt-4 text-secondary">Linha do Tempo - Marcos Importantes:</h3>
          <ul class="list-group list-group-flush">
              <li class="list-group-item">
                  <strong>2018:</strong> Fundação do grupo e início das oficinas de robótica educacional.
              </li>
              <li class="list-group-item">
                  <strong>2019-2020:</strong> Participação ativa na <strong>Semana Nacional de Ciência e Tecnologia (SNCT)</strong> com palestras e oficinas sobre Arduino e ThinkerCad.
              </li>
              <li class="list-group-item">
                  <strong>2023:</strong> Expansão para pesquisas em <strong>Internet das Coisas (IoT)</strong> e <strong>economia circular</strong>, fortalecendo a integração entre tecnologia e sustentabilidade.
              </li>
          </ul>
      </section>

      <!-- 2. Seção: Missão, Objetivos e Valores -->
      <section class="mt-5 container">
          <h2 class="mb-3 text-primary">Missão, Objetivos e Valores</h2>

          <div class="mb-4">
              <h3 class="text-secondary">Missão</h3>
              <p>
                  Promover o desenvolvimento de soluções inovadoras em robótica, automação e inteligência artificial, integrando educação e sustentabilidade para transformar o futuro.
              </p>
          </div>

          <div class="mb-4">
              <h3 class="text-secondary">Objetivos</h3>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <strong>Tecnológicos:</strong> Desenvolver ferramentas e métodos avançados em inteligência artificial, robótica e IoT.
                  </li>
                  <li class="list-group-item">
                      <strong>Educacionais:</strong> Capacitar jovens e profissionais por meio de oficinas, minicursos e materiais didáticos.
                  </li>
                  <li class="list-group-item">
                      <strong>Sociais:</strong> Incentivar a sustentabilidade e o impacto social em todos os projetos desenvolvidos.
                  </li>
              </ul>
          </div>

          <div>
              <h3 class="text-secondary">Valores</h3>
              <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                      <strong>Inovação:</strong> Buscar soluções tecnológicas criativas e eficientes.
                  </li>
                  <li class="list-group-item">
                      <strong>Sustentabilidade:</strong> Integrar práticas que respeitem o meio ambiente.
                  </li>
                  <li class="list-group-item">
                      <strong>Colaboração:</strong> Trabalhar em equipe e construir redes de conhecimento.
                  </li>
              </ul>
          </div>
      </section>

      <!-- 3. Seção: Equipe de Pesquisadores -->
      <section class="mt-5 container">
          <h2 class="mb-3 text-primary">Equipe de Pesquisadores</h2>
          <div class="row g-4">
              @foreach($pesquisadores as $pesquisador)
                  <div class="col-md-4">
                      <x-pesquisador-card
                          :name="$pesquisador['name']"
                          :image="$pesquisador['image']"
                          :bio="$pesquisador['area_of_expertise']"
                          :direction="$pesquisador['direction']"
                          :link="$pesquisador['link']"
                      />
                  </div>
              @endforeach
          </div>
      </section>

      <!-- 4. Seção: Áreas de Atuação -->
      <section class="mt-5 container">
          <h2 class="mb-3 text-primary">Áreas de Atuação</h2>
          <ul class="list-group list-group-flush">
              <li class="list-group-item">
                  <strong>Automação e Robótica Educacional:</strong> Desenvolvimento de robôs para ensino técnico, projetos em Arduino, ThinkerCad e outras ferramentas práticas.
              </li>
              <li class="list-group-item">
                  <strong>Computação, Educação e Sustentabilidade:</strong> Pesquisa em economia circular e robótica sustentável, desenvolvimento de materiais didáticos interdisciplinares.
              </li>
              <li class="list-group-item">
                  <strong>Engenharia e Inteligência Artificial Aplicada:</strong> Soluções tecnológicas com uso de IA e IoT, modelagem de sistemas inteligentes para análise de dados.
              </li>
          </ul>
      </section>

      <!-- 5. Seção: Galeria Multimídia -->
      <section class="mt-5 container">
          <h2 class="mb-3 text-primary">Galeria Multimídia</h2>
          <div id="carouselGaleria" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="/path/to/image1.jpg" class="d-block w-100" alt="Projeto 1">
                  </div>
                  <div class="carousel-item">
                      <img src="/path/to/image2.jpg" class="d-block w-100" alt="Projeto 2">
                  </div>
                  <div class="carousel-item">
                      <img src="/path/to/image3.jpg" class="d-block w-100" alt="Projeto 3">
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselGaleria" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Anterior</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselGaleria" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Próximo</span>
              </button>
          </div>
      </section>

      <!-- 6. Seção: Destaques e Conquistas -->
      <section class="mt-5 container">
          <h2 class="mb-3 text-primary">Destaques e Conquistas</h2>
          <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>20+</strong> Projetos concluídos e em andamento.</li>
              <li class="list-group-item"><strong>15+</strong> Artigos publicados.</li>
              <li class="list-group-item"><strong>50+</strong> Estudantes capacitados.</li>
              <li class="list-group-item"><strong>5+</strong> Eventos organizados.</li>
          </ul>
      </section>

      <!-- 7. Seção: Call-to-Action -->
      <section class="mt-5 text-center bg-light py-5">
          <h2 class="mb-3 text-primary">Quer fazer parte?</h2>
          <p>
              “Quer ficar por dentro das nossas inovações e eventos? Cadastre-se e receba as últimas novidades sobre os projetos do RGEAR diretamente no seu e-mail.”
          </p>
          <a href="#" class="btn btn-primary btn-lg">Receber Atualizações</a>
      </section>
  </main>

  <script src="{{ asset('js/sobre-nos.js') }}"></script>
</x-main-layout>
