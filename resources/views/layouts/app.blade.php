<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DevsGram - @yield("titulo")</title>
    @vite("resources/css/app.css")
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
    <body class="bg-gray-100">
        <header class="p-6 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center">
                <a href="/"><h1 class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-600 via-pink-500 to-yellow-500">DevsGram</h1></a>

                <nav class="flex gap-8 items-center">
                    <a class="font-bold uppercase text-base text-gray-700 hover:text-black hover:text-lg" href="#">Iniciar sesión</a>
                    <a class="font-bold uppercase text-base text-gray-700 hover:text-black hover:text-lg" href="{{ route('register') }}">Crear cuenta</a>
                </nav>
            </div>
        </header>

        <main class="container mx-auto mt-8">
            <h2 class="font-black text-center text-3xl mb-10">@yield("titulo")</h2>
            @yield("contenido")
        </main>

        <footer class="text-center p-5 text-gray-500 font-bold uppercase">
            DevsGram ~ Todos los derechos reservados ~ {{ now()->year }}
        </footer>
    </body>
</html>