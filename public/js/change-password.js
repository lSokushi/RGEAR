document.addEventListener("DOMContentLoaded", () => {
    const inputEmail = document.querySelector("#InputEmail");
    const btnSubmit = document.querySelector("button");
    const newPasswordCard = document.querySelectorAll(".card")[1];
    const inserEmailCard = document.querySelector(".card");

    newPasswordCard.style.display = "none";

    btnSubmit.addEventListener("click", (e) => {
        e.preventDefault();

        const email = inputEmail.value;

        // Expressão regular para verificar a estrutura válida de um e-mail
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if(email === "") {
            alert("O campo de e-mail não pode estar vazio.");
        } else if(!emailPattern.test(email)) {
            alert("Por favor, insira um endereço de e-mail valido.");
        } else {
            inserEmailCard.style.display = "none";
            newPasswordCard.style.display = "block";
        }
    })
})