document.addEventListener("DOMContentLoaded", () => {
  const steps = document.querySelectorAll(".step");
  const panels = document.querySelectorAll(".step-panel");
  const nextButtons = document.querySelectorAll(".next-button");

  // Função para alternar entre etapas
  function showStep(stepNumber) {
    // Remove o estado ativo de todas as etapas e painéis
    steps.forEach((step) => step.classList.remove("active"));
    panels.forEach((panel) => panel.classList.add("hidden"));

    // Adiciona o estado ativo à etapa e painel corretos
    const step = document.querySelector(`#step-${stepNumber}`);
    const panel = document.querySelector(`#panel-${stepNumber}`);
    step.classList.add("active");
    panel.classList.remove("hidden");
  }

  // Adiciona eventos aos botões "Próximo"
  nextButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      const nextStep = button.getAttribute("data-next");
      showStep(nextStep);
    });
  });

  // Exibir detalhes do arquivo no Passo 3
  const fileInput = document.querySelector("#file-upload");
  fileInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
      document.querySelector("#file-name").textContent = file.name;
      document.querySelector("#file-size").textContent = `${(file.size / 1024).toFixed(2)} KB`;
      document.querySelector("#file-type").textContent = file.type || "Desconhecido";
    }
  });

  // Mostra o primeiro passo ao carregar a página
  showStep(1);
});
