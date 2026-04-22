import './bootstrap';

import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css'; // Обавезно увези CSS за AOS

window.Alpine = Alpine;

// Иницијализација Alpine.js
Alpine.start();

// Иницијализација AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800, // Трајање анимације у милисекундама
        easing: 'ease-in-out', // Тип транзиције
        once: true, // Анимација се дешава само једном при скроловању
        mirror: false,
        offset: 120, // Колико пиксела пре него што анимација крене
    });
});