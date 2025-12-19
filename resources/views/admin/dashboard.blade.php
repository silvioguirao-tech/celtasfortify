@extends('layouts.app')

@section('title', 'Dashboard - Admin')

@section('content')
<h1 class="text-3xl font-bold mb-6">Dashboard do Administrador 🛠️</h1>
<p class="text-gray-700 mb-4">Bem-vindo, {{ auth()->user()->name }}!</p>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold mb-2">👥 Gerenciar Alunos</h3>
        <p class="text-sm text-gray-600">CRUD de alunos</p>
        <a href="{{ route('admin.alunos') }}" class="text-blue-600">Acessar</a>
    </div>

    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold mb-2">📚 Gerenciar Conteúdos</h3>
        <p class="text-sm text-gray-600">CRUD de conteúdos</p>
        <a href="{{ route('admin.conteudos') }}" class="text-blue-600">Acessar</a>
    </div>

    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold mb-2">📊 Relatórios</h3>
        <p class="text-sm text-gray-600">Base para relatórios</p>
    </div>
</div>
@endsection