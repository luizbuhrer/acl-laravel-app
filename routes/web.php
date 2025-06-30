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

//USUÁRIO COMUM: acesso a produtos, categorias, marcas
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::view('/produtos', 'produtos')->name('produtos');
    Route::view('/categorias', 'categorias')->name('categorias');
    Route::view('/marcas', 'marcas')->name('marcas');
});

//ADMINISTRADOR: acesso a usuários, permissões
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::view('/usuarios', 'admin.usuarios')->name('admin.usuarios');
    Route::view('/permissoes', 'admin.permissoes')->name('admin.permissoes');
});

require __DIR__.'/auth.php';
