// Wait for DOM content to load
document.addEventListener('DOMContentLoaded', () => {
    // Sidebar menu toggle
    const collapseMenuButton = document.querySelector('[data-bs-toggle="collapse"]');
    const collapseMenu = document.getElementById('collapseMenu');

    if (collapseMenuButton && collapseMenu) {
        collapseMenuButton.addEventListener('click', () => {
            collapseMenu.classList.toggle('show');
        });
    }

    // Form validation for publication creation
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

    // Sidebar toggle visibility for responsive layouts
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.querySelector('aside');
    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('d-none');
        });
    }

    // File input validation for multiple files
    const fileInput = document.getElementById('formFileMultiple');
    if (fileInput) {
        fileInput.addEventListener('change', () => {
            if (fileInput.files.length > 5) {
                alert('Você pode enviar no máximo 5 arquivos.');
                fileInput.value = '';
            }
        });
    }
});
