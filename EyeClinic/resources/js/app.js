import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

// AOS Inicijalizacija sa custom podešavanjima za "smooth" osećaj
AOS.init({
    duration: 1000,
    easing: 'ease-out-cubic',
    once: true,
    offset: 50,
});

Alpine.start();