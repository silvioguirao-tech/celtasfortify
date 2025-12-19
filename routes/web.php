<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])
    ->prefix('aluno')
    ->name('aluno.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('aluno.dashboard');
        })->name('dashboard');

    });
