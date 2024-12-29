// Captura o botão de aplicar filtros
document.getElementById('applyFilters').addEventListener('click', () => {
    const searchBar = document.getElementById('searchBar').value; // Termo de busca
    const selectedFilter = document.querySelector('.dropdown-menu .active')?.dataset.filter || ''; // Filtro selecionado

    // Faz a requisição para a rota de busca
    fetch(`/repositorio/search?query=${searchBar}&filter=${selectedFilter}`)
        .then(response => response.json())
        .then(data => {
            renderResults(data); // Exibe os resultados
        })
        .catch(error => console.error('Erro na busca:', error));
});

// Adiciona a funcionalidade para capturar o filtro selecionado
document.querySelectorAll('.dropdown-item').forEach(item => {
    item.addEventListener('click', (event) => {
        document.querySelectorAll('.dropdown-item').forEach(i => i.classList.remove('active')); // Remove filtros ativos
        event.target.classList.add('active'); // Marca o filtro atual como ativo
    });
});

// Função para exibir os resultados
function renderResults(results) {
    const resultContainer = document.getElementById('resultContainer');
    resultContainer.innerHTML = ''; // Limpa resultados anteriores

    results.forEach(item => {
        const resultCard = `<div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">${item.title}</h5>
                <p class="card-text">${item.resume}</p>
                <p class="text-muted">Autor: ${item.author}</p>
                <p class="text-muted">Ano: ${item.year}</p>
            </div>
        </div>`;
        resultContainer.innerHTML += resultCard;
    });
}
