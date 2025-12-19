<?php

use Illuminate\Support\Facades\Route;

// Rotas Públicas
Route::get('/', function () {
    return view('public.home');
})->name('home');

Route::get('/sobre', function () {
    return view('public.sobre');
})->name('sobre');

Route::get('/cursos', function () {
    return view('public.cursos');
})->name('cursos');

Route::get('/contato', function () {
    return view('public.contato');
})->name('contato');

// Rotas do Aluno (protegidas)
Route::middleware(['auth', 'active'])
    ->prefix('aluno')
    ->name('aluno.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('aluno.dashboard');
        })->name('dashboard');

        Route::get('/aulas', function () {
            return view('aluno.aulas');
        })->name('aulas');

        Route::get('/pdfs', function () {
            return view('aluno.pdfs');
        })->name('pdfs');

        Route::get('/simulados', function () {
            return view('aluno.simulados');
        })->name('simulados');

        Route::get('/perfil', function () {
            return view('aluno.perfil');
        })->name('perfil');

    });

// Rotas do Admin (protegidas por role)
Route::middleware(['auth', 'active', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('/alunos', function () {
            return view('admin.alunos');
        })->name('alunos');

        Route::post('/alunos/{user}/toggle', function (\App\Models\User $user) {
            $user->update(['active' => !$user->active]);
            return back()->with('success', 'Status do usuário atualizado.');
        })->name('alunos.toggle');

        Route::get('/conteudos', function () {
            return view('admin.conteudos');
        })->name('conteudos');

    });
