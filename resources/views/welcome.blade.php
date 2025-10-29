<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My App</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')
    
    <style>
        #mobile-menu.active {
            display: block;
            transform: scale-y(1);
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased flex items-center justify-center min-h-screen">

    {{-- MAIN CONTENT --}}
    <main class="text-center p-4 md:p-6">
        <h1 class="text-4xl font-bold text-gray-800">Welcome!</h1>
        <p class="mt-4 text-lg text-gray-600">
            This project is a simple TPS system with Students and Sections management.
        </p>

        <a href="{{ route('dashboard') }}" 
        class="mt-6 inline-block bg-blue-500 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-600 transition">
            Proceed
        </a>
    </main>

</body>
</html>
