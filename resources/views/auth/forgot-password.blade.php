@extends('layouts.app')

@section('title', 'Recuperar senha')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Recuperar senha</h2>

    @if (session('status'))
        <div class="mb-4 text-green-600">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="mb-4">
            <label class="block mb-1">E-mail</label>
            <input type="email" name="email" required
                   class="w-full border rounded px-3 py-2">
        </div>

        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
            Enviar link de recuperação
        </button>
    </form>
</div>
@endsection
