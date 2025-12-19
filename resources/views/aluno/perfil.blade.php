@extends('layouts.app')

@section('title', 'Perfil - Aluno')

@section('content')
<h1 class="text-3xl font-bold mb-6">Perfil do Aluno</h1>
<p class="text-gray-700 mb-4">Gerencie seu perfil e configurações de segurança.</p>

<div class="bg-white p-6 rounded shadow">
    <h3 class="font-semibold mb-4">Informações Pessoais</h3>
    <p><strong>Nome:</strong> {{ auth()->user()->name }}</p>
    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
</div>

<div class="bg-white p-6 rounded shadow mt-6">
    <h3 class="font-semibold mb-4">Autenticação de Dois Fatores</h3>
    @if(auth()->user()->two_factor_secret)
        <p class="text-green-600">2FA ativado.</p>
        <a href="{{ route('two-factor.disable') }}" class="text-red-600">Desativar 2FA</a>
    @else
        <p class="text-red-600">2FA não ativado.</p>
        <a href="{{ route('two-factor.create') }}" class="text-blue-600">Ativar 2FA</a>
    @endif
</div>
@endsection