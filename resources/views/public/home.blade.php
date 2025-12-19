@extends('layouts.app')

@section('title', 'Home - Celtas')

@section('content')
<div class="text-center py-20">
    <h1 class="text-4xl font-bold text-green-600 mb-4">Bem-vindo ao Celtas</h1>
    <p class="text-lg text-gray-700 mb-8">Plataforma educacional completa para alunos.</p>
    <a href="{{ route('login') }}" class="bg-green-600 text-white px-6 py-3 rounded hover:bg-green-700">Entrar</a>
    <a href="{{ route('register') }}" class="ml-4 bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Registrar</a>
</div>

<div class="grid md:grid-cols-3 gap-8 mt-16">
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-2">Sobre</h2>
        <p>Conheça nossa missão.</p>
        <a href="{{ route('sobre') }}" class="text-green-600">Saiba mais</a>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-2">Cursos</h2>
        <p>Explore nossos cursos.</p>
        <a href="{{ route('cursos') }}" class="text-green-600">Ver cursos</a>
    </div>
    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-xl font-semibold mb-2">Contato</h2>
        <p>Entre em contato conosco.</p>
        <a href="{{ route('contato') }}" class="text-green-600">Fale conosco</a>
    </div>
</div>
@endsection