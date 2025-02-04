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
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton) {

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
}
});

//Create form
document.querySelectorAll('input[name="info_type"]').forEach((radio) => {
    radio.addEventListener('change', function() {
        document.getElementById('astronomy-form').style.display = 'none';
        document.getElementById('name-form').style.display = 'none';
        document.getElementById('magic-form').style.display = 'none';
        document.getElementById('keywords-form').style.display = 'none';

        if (this.value === 'astronomy') {
            document.getElementById('astronomy-form').style.display = 'block';
        } else if (this.value === 'name') {
            document.getElementById('name-form').style.display = 'block';
        } else if (this.value === 'magic') {
            document.getElementById('magic-form').style.display = 'block';
        } else if (this.value === 'keywords') {
            document.getElementById('keywords-form').style.display = 'block';
        }
    });
});

document.getElementById('info-type-astronomy').checked = true; 
document.getElementById('astronomy-form').style.display = 'block'; 

// Add keywords to form
document.getElementById('add-keywords-btn').addEventListener('click', function() {
    const keywordsInput = document.getElementById('keywords');
    const keywords = keywordsInput.value.trim().split(',').map(keyword => keyword.trim()).filter(keyword => keyword);

    if (keywords.length > 0) {
        const keywordsList = document.getElementById('keywords-list');

        keywords.forEach(keyword => {
            const keywordItem = document.createElement('div');
            keywordItem.textContent = keyword;
            keywordsList.appendChild(keywordItem);
        });

        // Atualiza o campo escondido com os valores das palavras-chave
        document.querySelector('input[name="keywords"]').value = keywords.join(',');
        keywordsInput.value = ''; // Limpa o campo de input
    }
});