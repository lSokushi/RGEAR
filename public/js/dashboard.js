const showSection = (section) => {
    const sections = document.querySelectorAll(".content-section");
    sections.forEach((sec) => (sec.style.display = "none"));
    document.getElementById(section).style.display = "block";
  };
  
  document.addEventListener("DOMContentLoaded", function () {
    showSection("usuario");
  });
  