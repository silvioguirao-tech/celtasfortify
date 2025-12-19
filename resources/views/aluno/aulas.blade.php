@extends('layouts.app')

@section('title', 'Aulas - Aluno')

@section('content')
<h1 class="text-3xl font-bold mb-6">Aulas</h1>
<p class="text-gray-700 mb-4">Aqui estão suas aulas disponíveis.</p>
<div class="space-y-4">
    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold">Aula 1: Introdução</h3>
        <p>Descrição da aula.</p>
    </div>
    <div class="bg-white p-4 rounded shadow">
        <h3 class="font-semibold">Aula 2: Conceitos Básicos</h3>
        <p>Descrição da aula.</p>
    </div>
</div>
@endsection