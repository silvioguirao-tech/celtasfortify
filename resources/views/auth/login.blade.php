@extends('layouts.app')

@section('title', 'Entrar')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Entrar</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">E-mail</label>
            <input type="email" name="email" required autofocus
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Senha</label>
            <input type="password" name="password" required
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="flex items-center justify-between mb-4">
            <label class="flex items-center">
                <input type="checkbox" name="remember" class="mr-2">
                Lembrar-me
            </label>

            <a href="{{ route('password.request') }}"
               class="text-sm text-green-600 hover:underline">
                Esqueci a senha
            </a>
        </div>

        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
            Entrar
        </button>
    </form>
</div>
@endsection
