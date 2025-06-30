<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

 // ROTAS PARA O USUÁRIO COMUM
    Route::get('/produtos', function () {
        return 'Gestão de Produtos';
    })->name('produtos.index');

    Route::get('/categorias', function () {
        return 'Gestão de Categorias';
    })->name('categorias.index');

    Route::get('/marcas', function () {
        return 'Gestão de Marcas';
    })->name('marcas.index');

 // ROTAS PARA O ADMIN
    Route::get('/usuarios', function () {
        return 'Gestão de Usuários';
    })->name('usuarios.index');

    Route::get('/permissoes', function () {
        return 'Gestão de Permissões';
    })->name('permissoes.index');

require __DIR__.'/auth.php';
