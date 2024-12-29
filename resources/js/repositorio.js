// Captura o botão de aplicar filtros
document.getElementById('applyFilters').addEventListener('click', () => {
    const searchBar = document.getElementById('searchBar').value; // Termo de busca
    const selectedFilter = document.querySelector('.dropdown-menu .active')?.dataset.filter || ''; // Filtro selecionado

    // Exibe mensagem de carregamento
    renderLoading();

    // Faz a requisição para a rota de busca
    fetch(`/repositorio/search?query=${searchBar}&filter=${selectedFilter}`)
        .then(response => {
            if (!response.ok) throw new Error('Erro ao carregar os resultados.');
            return response.json();
        })
        .then(data => {
            if (data.length === 0) {
                renderNoResults(); // Exibe mensagem se nenhum resultado for encontrado
            } else {
                renderResults(data); // Renderiza os resultados encontrados
            }
        })
        .catch(error => {
            console.error('Erro na busca:', error);
            renderError(); // Exibe mensagem de erro
        });
});


// Adiciona a funcionalidade para capturar o filtro selecionado
document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', (event) => {
        document.querySelectorAll('.dropdown-item').forEach(i => i.classList.remove('active')); // Remove filtros ativos
        event.target.classList.add('active'); // Marca o filtro atual como ativo

        // Atualiza o texto do botão dropdown
        const filterButton = document.getElementById('filterDropdown');
        filterButton.textContent = event.target.textContent;
    });
});

// Função para exibir resultados
function renderResults(results) {
    const resultContainer = document.getElementById('resultContainer');
    resultContainer.innerHTML = ''; // Limpa resultados anteriores

    results.forEach(item => {
        const resultCard = `<div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
                <p class="card-text">${item.resume}</p>
                <p class="text-muted">Linha de Pesquisa: ${item.research_line}</p>
                <p class="text-muted">Ano: ${item.year}</p>
            </div>
        </div>`;
        resultContainer.innerHTML += resultCard;
    });
}


// Função para exibir mensagem de carregamento
function renderLoading() {
    const resultContainer = document.getElementById('resultContainer');
    resultContainer.innerHTML = '<p>Carregando resultados...</p>';
}

// Função para exibir mensagem de nenhum resultado encontrado
function renderNoResults() {
    const resultContainer = document.getElementById('resultContainer');
    resultContainer.innerHTML = '<p>Nenhum resultado encontrado.</p>';
}

// Função para exibir mensagem de erro
function renderError() {
    const resultContainer = document.getElementById('resultContainer');
    resultContainer.innerHTML = '<p>Ocorreu um erro ao buscar os resultados. Tente novamente mais tarde.</p>';
}

// Função para renderizar paginação
function renderPagination(meta) {
    const paginationContainer = document.getElementById('paginationContainer');
    paginationContainer.innerHTML = '';

    if (meta.last_page > 1) {
        for (let i = 1; i <= meta.last_page; i++) {
            const button = document.createElement('button');
            button.textContent = i;
            button.classList.add('btn', 'btn-secondary', 'm-1');
            if (i === meta.current_page) {
                button.classList.add('btn-primary');
            }
            button.addEventListener('click', () => fetchResults(i));
            paginationContainer.appendChild(button);
        }
    }
}

// Função para buscar resultados com suporte a paginação
function fetchResults(page = 1) {
    const searchBar = document.getElementById('searchBar').value;
    const selectedFilter = document.querySelector('.dropdown-menu .active')?.dataset.filter || '';

    renderLoading();

    fetch(`/repositorio/search?query=${searchBar}&filter=${selectedFilter}&page=${page}`)
        .then(response => response.json())
        .then(data => {
            if (data.data.length === 0) {
                renderNoResults();
            } else {
                renderResults(data.data);
                renderPagination(data.meta);
            }
        })
        .catch(error => {
            console.error('Erro na busca:', error);
            renderError();
        });
}

// Atualize os filtros ou interações baseados em "Artigos", "Jogos", etc.
const typeMapping = {
    'Artigos': 'article',
    'Jogos': 'game',
    'Eventos': 'event',
    'Outros': 'other',
};

// Usar os valores mapeados conforme necessário