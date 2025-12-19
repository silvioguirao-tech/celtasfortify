<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Celtas')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen">

    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <span class="font-bold text-xl text-green-600">Celtas</span>

            <div class="space-x-4">
                @auth
                    <a href="{{ route('aluno.dashboard') }}" class="text-gray-700 hover:text-green-600">Dashboard</a>

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button class="text-red-600 hover:underline">
                            Sair
                        </button>
                    </form>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-green-600">Entrar</a>
                    <a href="{{ route('register') }}" class="text-gray-700 hover:text-green-600">Registrar</a>
                @endguest
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto p-6">
        @yield('content')
    </main>

</body>
</html>
