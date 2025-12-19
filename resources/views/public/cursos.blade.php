@extends('layouts.app')

@section('title', 'Cursos - Celtas')

@section('content')
<div class="py-20">
    <h1 class="text-3xl font-bold mb-8">Nossos Cursos</h1>
    <p class="text-lg text-gray-700 mb-8">Explore uma variedade de cursos disponíveis.</p>
    <div class="grid md:grid-cols-2 gap-8">
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold">Curso 1</h2>
            <p>Descrição do curso.</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-semibold">Curso 2</h2>
            <p>Descrição do curso.</p>
        </div>
    </div>
</div>
@endsection