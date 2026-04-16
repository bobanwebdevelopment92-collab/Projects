import './bootstrap';

import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';

window.Alpine = Alpine;

/**
 * Inicijalizacija AOS (Animate On Scroll)
 * Podešavamo globalne parametre za MONOLITH estetiku
 */
document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 1000, // Dužina animacije
        once: true,     // Animira se samo jednom pri skrolu nadole
        offset: 50,     // Offset od ivice ekrana
        easing: 'ease-in-out-cubic', // Tečnija, premium kriva animacije
    });
});

/**
 * Custom Scroll Handler
 * Dodaje 'scrolled' klasu na body radi dodatnih CSS efekata
 */
window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        document.body.classList.add('is-scrolled');
    } else {
        document.body.classList.remove('is-scrolled');
    }
});

// Pokretanje Alpine.js
Alpine.start();

/**
 * Opciono: Custom Cursor Efekat
 * Ako želiš onaj "skupi" osećaj o kojem smo pričali, 
 * otkomentariši ovo i dodaj div sa id="cursor" u app.blade.php
 */
/*
const cursor = document.getElementById('cursor');
if (cursor) {
    window.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
    });
}
*/