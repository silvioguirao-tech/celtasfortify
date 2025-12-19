@extends('layouts.app')

@section('title', 'Redefinir senha')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6 text-center">Redefinir senha</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <div class="mb-4">
            <label class="block mb-1">E-mail</label>
            <input type="email" name="email" value="{{ old('email', $request->email) }}" required
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Nova senha</label>
            <input type="password" name="password" required
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-6">
            <label class="block mb-1">Confirmar senha</label>
            <input type="password" name="password_confirmation" required
                   class="w-full border rounded px-3 py-2">
        </div>

        <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
            Redefinir senha
        </button>
    </form>
</div>
@endsection
