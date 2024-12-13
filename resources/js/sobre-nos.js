document.addEventListener('DOMContentLoaded', () => {
    // Inicialização do AOS (Animações ao rolar a página)
    AOS.init();

    // GSAP: Animação dos itens da linha do tempo
    gsap.from(".timeline-item", {
        duration: 1.2,
        opacity: 0,
        y: 50,
        stagger: 0.3,
        ease: "power3.out",
    });

    // GSAP: Animação do título da seção
    gsap.from(".section-title", {
        duration: 1,
        opacity: 0,
        y: -50,
        ease: "power3.out",
    });

    // GSAP: Animação do botão na seção CTA
    const ctaButton = document.querySelector('.cta-section .btn');
    if (ctaButton) {
        ctaButton.addEventListener('mouseenter', () => {
            gsap.to(ctaButton, { scale: 1.1, duration: 0.3 });
        });
        ctaButton.addEventListener('mouseleave', () => {
            gsap.to(ctaButton, { scale: 1, duration: 0.3 });
        });
    }

    // Controle da Linha do Tempo (scroll e ativação de itens)
    const timelineItems = document.querySelectorAll(".timeline-item");
    const timelineLine = document.querySelector(".timeline-line");

    const handleScroll = () => {
        let scrolled = false;

        timelineItems.forEach((item) => {
            const rect = item.getBoundingClientRect();
            if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
                item.classList.add("active");
                scrolled = true;
            } else {
                item.classList.remove("active");
            }
        });

        timelineLine.classList.toggle("scrolled", scrolled);
    };

    window.addEventListener("scroll", handleScroll);
    handleScroll();
});
