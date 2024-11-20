document.addEventListener('DOMContentLoaded', () => {
    // Pré-visualização do formulário
    const previewButton = document.querySelector('[data-bs-target="#previewModal"]');
    if (previewButton) {
        previewButton.addEventListener('click', () => {
            const previewModalBody = document.querySelector("#previewModal .modal-body");
            const formFields = document.querySelectorAll("form input, form textarea, form select");
            let previewContent = "<ul>";

            formFields.forEach((field) => {
                if (field.type !== "file") {
                    previewContent += `<li><strong>${field.previousElementSibling?.innerText || field.name}:</strong> ${field.value || "Não preenchido"}</li>`;
                }
            });

            previewContent += "</ul>";
            previewModalBody.innerHTML = previewContent;
        });
    }

    // Validação de formulário
    const publicationForm = document.querySelector('form[action*="dashboard-publication.store"]');
    if (publicationForm) {
        publicationForm.addEventListener('submit', (e) => {
            const requiredFields = ['title', 'author', 'resume', 'type', 'year', 'location'];
            let isValid = true;

            requiredFields.forEach((field) => {
                const input = publicationForm.querySelector(`[name="${field}"]`);
                if (input && !input.value.trim()) {
                    isValid = false;
                    input.classList.add('is-invalid');
                } else if (input) {
                    input.classList.remove('is-invalid');
                }
            });

            if (!isValid) {
                e.preventDefault();
                alert('Por favor, preencha todos os campos obrigatórios.');
            }
        });
    }

    // Limitação no upload de arquivos
    const fileInput = document.getElementById('formFileMultiple');
    if (fileInput) {
        fileInput.addEventListener('change', () => {
            if (fileInput.files.length > 5) {
                alert('Você pode enviar no máximo 5 arquivos.');
                fileInput.value = '';
            } else {
                const fileNames = Array.from(fileInput.files).map((file) => file.name).join(", ");
                alert(`Arquivos selecionados: ${fileNames}`);
            }
        });
    }

    // Collapse Navigation
    const collapseToggle = document.querySelector('[data-bs-toggle="collapse"]');
    if (collapseToggle) {
        collapseToggle.addEventListener('click', () => {
            const target = document.querySelector(collapseToggle.getAttribute('href'));
            if (target) {
                target.classList.toggle('show');
            }
        });
    }

    // Sidebar toggle visibility for responsive layouts
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('aside');
    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('d-none');
        });
    }
});
