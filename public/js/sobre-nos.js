// 1. Importação e Inicialização de Bibliotecas
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { SplitText } from "gsap/SplitText";
import AOS from "aos";
import "aos/dist/aos.css";

gsap.registerPlugin(ScrollTrigger, SplitText);

AOS.init({
    once: true, // As animações só acontecem uma vez
    duration: 800, // Duração das animações
    easing: "ease-out", // Suavização das animações
});

// 2. Funções Genéricas de Animação
const animateElement = (selector, options = {}, triggerOptions = {}) => {
    const element = document.querySelector(selector);
    if (element) {
        gsap.from(selector, {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power3.out",
            ...options,
            scrollTrigger: {
                trigger: selector,
                start: "top 85%",
                toggleActions: "play none none reverse",
                ...triggerOptions,
            },
        });
    } else {
        console.warn(`Elemento não encontrado: ${selector}`);
    }
};

const animateSplitText = (selector, stagger = 0.05) => {
    const element = document.querySelector(selector);
    if (element) {
        const split = new SplitText(selector, { type: "chars, words" });
        gsap.from(split.chars, {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power3.out",
            stagger,
            scrollTrigger: {
                trigger: selector,
                start: "top 85%",
            },
        });
    } else {
        console.warn(`Elemento para SplitText não encontrado: ${selector}`);
    }
};

const animateGroup = (selector, options = {}, stagger = 0.2) => {
    const elements = document.querySelectorAll(selector);
    if (elements.length > 0) {
        gsap.from(selector, {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power3.out",
            stagger,
            scrollTrigger: {
                trigger: selector,
                start: "top 85%",
            },
            ...options,
        });
    } else {
        console.warn(`Grupo de elementos não encontrado: ${selector}`);
    }
};

// 3. Animações de "Quem Somos"
animateSplitText("#quem-somos-title");
animateElement("#quem-somos-text", { x: -50 });
animateElement("#quem-somos-visual", { scale: 0.8 });

// 4. Linha do Tempo
const timelineItems = document.querySelectorAll(".timeline-item");
if (timelineItems.length > 0) {
    timelineItems.forEach((item, index) => {
        animateElement(item, { delay: index * 0.2 });
    });

    const timelineLine = document.querySelector(".timeline-line");
    if (timelineLine) {
        ScrollTrigger.create({
            trigger: timelineLine,
            start: "top center",
            end: "bottom center",
            onUpdate: (self) => {
                timelineLine.style.background = `linear-gradient(to bottom, #007bff ${self.progress * 100}%, #28a745)`;
            },
        });
    } else {
        console.warn("Linha do tempo não encontrada: .timeline-line");
    }
} else {
    console.warn("Itens da linha do tempo não encontrados: .timeline-item");
}

// 5. Call-to-Action
const ctaButton = document.querySelector(".cta-section .btn");
if (ctaButton) {
    ctaButton.addEventListener("mouseenter", () => {
        gsap.to(ctaButton, {
            scale: 1.1,
            duration: 0.3,
            background: "linear-gradient(45deg, #007bff, #28a745)",
        });
    });
    ctaButton.addEventListener("mouseleave", () => {
        gsap.to(ctaButton, { scale: 1, duration: 0.3, background: "#007bff" });
    });
} else {
    console.warn("Botão CTA não encontrado: .cta-section .btn");
}

// 6. Áreas de Atuação
animateGroup(".areas-atuacao .area-card");


// 7. Destaques e Conquistas
animateGroup(".destaques .card", { scale: 0.8, duration: 0.8 });

// 8. Equipe de Pesquisadores
const researcherCards = document.querySelectorAll(".equipe-pesquisadores .col-md-4");
if (researcherCards.length > 0) {
    researcherCards.forEach((card, index) => {
        gsap.from(card, {
            opacity: 0,
            y: 30, // Movimentação mais sutil para baixo
            duration: 0.8, // Animação mais rápida
            ease: "power2.out", // Transição mais suave e profissional
            delay: index * 0.15, // Pequeno atraso entre os cartões
            scrollTrigger: {
                trigger: card,
                start: "top 85%", // Inicia mais cedo ao entrar na tela
                toggleActions: "play none none reverse", // Reverte ao sair da tela
            },
        });
    });
} else {
    console.warn("Cartões de pesquisadores não encontrados: .equipe-pesquisadores .col-md-4");
}

document.addEventListener("DOMContentLoaded", () => {
    console.log("Áreas de Atuação:", document.querySelectorAll(".areas-atuacao .area-card"));
    console.log("Destaques:", document.querySelectorAll(".destaques .destaque-card"));
});
