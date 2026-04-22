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
                vantage: {
                    dark: '#0f172a',    // Deep Navy
                    primary: '#0284c7', // Sky Blue
                    accent: '#06b6d4',  // Cyan/Freshness
                    light: '#f8fafc',   // Soft Gray background
                    surface: '#f1f5f9', // Divider/Section gray
                },
            },
            fontFamily: {
                // Задржао сам Figtree јер је модеран, али додао системске фонтове
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                'vantage-soft': '0 10px 25px -5px rgba(2, 132, 199, 0.1)',
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
};