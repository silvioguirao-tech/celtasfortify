@extends('layouts.app')

@section('title', 'Verifique seu e-mail')

@section('content')
<div class="max-w-md mx-auto bg-white p-6 rounded shadow text-center">
    <h2 class="text-2xl font-bold mb-4">Verifique seu e-mail 📧</h2>

    <p class="mb-4 text-gray-700">
        Antes de continuar, verifique seu e-mail clicando no link que enviamos.
    </p>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 text-green-600">
            Um novo link foi enviado para seu e-mail.
        </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <button class="text-green-600 hover:underline">
            Reenviar e-mail de verificação
        </button>
    </form>
</div>
@endsection
