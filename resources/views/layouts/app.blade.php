<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Portal - @yield('titulo')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    </head>
    <body class="antialiased">

        {{-- header --}}
        <header class="p-1 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text gap-1 item-center">Devstagram</h1>

                <nav class="flex gap-1 item-center">
                    <a href="/" class="font bold uppercase text-gray-600 text-sm">Home</a>
                    <a href="#" class="font bold uppercase text-gray-600 text-sm">Login</a>
                    <a href="/crear-cuenta" class="font bold uppercase text-gray-600 text-sm">Crear cuenta</a>
                </nav>
            </div>
        </header>
        {{-- / header --}}

        {{-- contenido --}}
        <main class="container mx-auto mt-10">
            @yield("contenido")
        </main>
        {{-- / contenido --}}

        {{-- footer --}}
        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            Devstagram UPV - Todos los derechos reservados {{now()->year}}
        </footer>
        {{-- / footer --}}
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</html>
