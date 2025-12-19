@extends('layouts.app')

@section('title', 'Materiais - Aluno')

@section('content')
<h1 class="text-3xl font-bold mb-6">Materiais em PDF</h1>
<p class="text-gray-700 mb-4">Baixe seus materiais de estudo.</p>
<ul class="space-y-2">
    <li class="bg-white p-4 rounded shadow">
        <a href="#" class="text-blue-600">Material 1.pdf</a>
    </li>
    <li class="bg-white p-4 rounded shadow">
        <a href="#" class="text-blue-600">Material 2.pdf</a>
    </li>
</ul>
@endsection