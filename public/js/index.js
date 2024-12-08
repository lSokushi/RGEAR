// Seleciona todos os itens de features
const featureItems = document.querySelectorAll('.feature-item');

// Verifica se há itens antes de adicionar eventos
if (featureItems.length > 0) {
    featureItems.forEach(item => {
        // Efeito de hover
        item.addEventListener('mouseenter', () => {
            item.style.transform = 'scale(1.05)';
            item.style.boxShadow = '0 6px 12px rgba(0, 0, 0, 0.2)';
        });

        item.addEventListener('mouseleave', () => {
            item.style.transform = 'scale(1)';
            item.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
        });

        // Clique para exibir alerta
        item.addEventListener('click', () => {
            const featureTitle = item.querySelector('h3')?.textContent || 'Título desconhecido';
            alert(`Você clicou em: ${featureTitle}`);
        });
    });
}
