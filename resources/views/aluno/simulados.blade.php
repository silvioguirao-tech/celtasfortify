@extends('layouts.app')

@section('title', 'Simulados - Aluno')

@section('content')
<h1 class="text-3xl font-bold mb-6">Simulados</h1>
<p class="text-gray-700 mb-4">Pratique com nossos simulados.</p>
<div class="space-y-4">
    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold">Simulado 1</h3>
        <p>Descrição.</p>
        <a href="#" class="text-green-600">Iniciar</a>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold">Simulado 2</h3>
        <p>Descrição.</p>
        <a href="#" class="text-green-600">Iniciar</a>
    </div>
</div>
@endsection