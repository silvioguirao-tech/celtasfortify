DASHBOARD DO ALUNO - ok

@extends('layouts.app')

@section('title', 'Dashboard do Aluno')

@section('content')
    <h1 class="text-3xl font-bold mb-6">
        Dashboard do Aluno 🎓
    </h1>

    <p class="text-gray-700 mb-4">
        Bem-vindo, {{ auth()->user()->name }}!
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold mb-2">📚 Aulas</h3>
            <p class="text-sm text-gray-600">Acesse suas aulas</p>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold mb-2">📄 Materiais</h3>
            <p class="text-sm text-gray-600">PDFs e apostilas</p>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <h3 class="font-semibold mb-2">📝 Simulados</h3>
            <p class="text-sm text-gray-600">Teste seus conhecimentos</p>
        </div>
    </div>
@endsection
