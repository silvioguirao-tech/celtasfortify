@extends('layouts.app')

@section('title', 'Gerenciar Alunos - Admin')

@section('content')
<h1 class="text-3xl font-bold mb-6">Gerenciar Alunos</h1>
@if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 mb-4 rounded">
        {{ session('success') }}
    </div>
@endif
<p class="text-gray-700 mb-4">CRUD de alunos.</p>

<table class="w-full bg-white rounded shadow">
    <thead>
        <tr class="bg-gray-200">
            <th class="p-4 text-left">Nome</th>
            <th class="p-4 text-left">Email</th>
            <th class="p-4 text-left">Status</th>
            <th class="p-4 text-left">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach(\App\Models\User::role('aluno')->get() as $aluno)
        <tr class="border-t">
            <td class="p-4">{{ $aluno->name }}</td>
            <td class="p-4">{{ $aluno->email }}</td>
            <td class="p-4">
                <span class="{{ $aluno->active ? 'text-green-600' : 'text-red-600' }}">
                    {{ $aluno->active ? 'Ativo' : 'Inativo' }}
                </span>
            </td>
            <td class="p-4">
                <form method="POST" action="{{ route('admin.alunos.toggle', $aluno) }}" class="inline">
                    @csrf
                    @method('POST')
                    <button type="submit" class="text-blue-600 hover:underline">
                        {{ $aluno->active ? 'Desativar' : 'Ativar' }}
                    </button>
                </form>
                <a href="#" class="text-red-600 ml-4">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection