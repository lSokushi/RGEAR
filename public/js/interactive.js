// Interactivity for the Dashboard
document.addEventListener('DOMContentLoaded', () => {
    const previewBtn = document.getElementById('previewBtn');

    // Preview functionality
    previewBtn.addEventListener('click', () => {
        alert('Pré-visualização não está implementada ainda!'); // Placeholder alert
    });

    // Highlight active input
    const inputs = document.querySelectorAll('input, textarea, select');
    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.style.borderColor = '#007bff';
        });
        input.addEventListener('blur', () => {
            input.style.borderColor = '#ced4da';
        });
    });
});
