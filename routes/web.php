<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard comum para todos os usuários autenticados
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Rotas acessíveis apenas para administradores
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::view('/usuarios', 'admin.usuarios')->name('admin.usuarios');
    Route::view('/permissoes', 'admin.permissoes')->name('admin.permissoes');
});

// Rotas acessíveis apenas para usuários comuns
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::view('/produtos', 'produtos')->name('produtos');
    Route::view('/categorias', 'categorias')->name('categorias');
    Route::view('/marcas', 'marcas')->name('marcas');
});

require __DIR__.'/auth.php';
