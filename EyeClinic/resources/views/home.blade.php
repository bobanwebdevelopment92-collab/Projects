<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eye Clinic</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased font-sans bg-obsidian text-glance-200 overflow-x-hidden">

    <x-header />

    <main>
       
        <x-home.hero />
        
        <x-home.services />
        
        <x-home.technology />
        
        <x-home.doctors />
        
        <x-cta />
    
    </main>

    <x-footer />

</body>
</html>