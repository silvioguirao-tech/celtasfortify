@extends('layouts.app')

@section('title', 'Contato - Celtas')

@section('content')
<div class="py-20">
    <h1 class="text-3xl font-bold mb-8">Entre em Contato</h1>
    <form class="max-w-md mx-auto">
        <div class="mb-4">
            <label class="block text-gray-700">Nome</label>
            <input type="text" class="w-full p-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Email</label>
            <input type="email" class="w-full p-2 border rounded">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700">Mensagem</label>
            <textarea class="w-full p-2 border rounded"></textarea>
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Enviar</button>
    </form>
</div>
@endsection