import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                // Primarna tamna - luksuz i autoritet (umesto čiste crne)
                obsidian: {
                    DEFAULT: '#0A0F14',
                    soft: '#161D24',
                },
                // Akcentna boja - simbolizuje čistu viziju i tehnologiju
                iris: {
                    light: '#E0F2F1',
                    DEFAULT: '#00C2CB', // Vibrantna tirkizna
                    dark: '#008A91',
                },
                // Sekundarna - boja luksuznog papira/kože (za balans)
                glance: {
                    50: '#F8F9FA',
                    100: '#F1F3F5',
                    200: '#E9ECEF',
                    gold: '#C5A059', // Za suptilne detalje (npr. 'Premium' usluge)
                },
            },
            fontFamily: {
                // Predlažem promenu na 'Plus Jakarta Sans' ili 'Inter' za moderniji look
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                display: ['Outfit', 'sans-serif'], // Za velike naslove
            },
            backgroundImage: {
                'glass-gradient': 'linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05))',
            },
        },
    },
    plugins: [],
};