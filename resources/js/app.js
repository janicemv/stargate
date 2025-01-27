import './bootstrap';

import.meta.glob([
    '../images/**'
]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Dark Mode Toggle Button

var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark"); 
    themeToggleLightIcon.classList.remove("hidden"); 
    themeToggleDarkIcon.classList.add("hidden");
} else {
    document.documentElement.classList.remove("dark");
    themeToggleDarkIcon.classList.remove("hidden"); 
    themeToggleLightIcon.classList.add("hidden"); 
}

// Selecionar o botão de alternância
var themeToggleBtn = document.getElementById("theme-toggle");

// Adicionar o evento de clique
themeToggleBtn.addEventListener("click", function () {
    // Alternar os ícones
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // Alternar o tema e salvar no localStorage
    if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
    } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
    }
});


// Toggle Menu

document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    console.log(mobileMenuButton);
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton) {

    mobileMenuButton.addEventListener('click', () => {
        console.log('button clicked');
        mobileMenu.classList.toggle('hidden');
    });
}
});
