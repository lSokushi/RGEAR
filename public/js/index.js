// Seleciona todos os itens de features
document.addEventListener('DOMContentLoaded', () => {
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
});

document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.stat-card h3');
    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / 200;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target;
            }
        };

        counter.setAttribute('data-target', counter.innerText);
        counter.innerText = '0';
        updateCount();
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const slideContainer = document.querySelector('#carousel-slide');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.getElementById('prev');
    const nextBtn = document.getElementById('next');
    let currentIndex = 0;

    const updateSlidePosition = () => {
        slideContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
    };

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlidePosition();
    });

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlidePosition();
    });
});
