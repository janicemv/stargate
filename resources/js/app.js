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

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
    } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
    }
});


// Toggle Menu

document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton) {

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
});

// get star ID from Form
const starElement = document.getElementById('star')
    if(starElement){
        starElement.addEventListener('input', function () {
            const selectedOption = Array.from(document.getElementById('stars').options).find(option => option.value === this.value);
            if (selectedOption) {
                const starId = document.getElementById('star_id').value = selectedOption.getAttribute('data-id');
                console.log(starId);
            }
        })
};