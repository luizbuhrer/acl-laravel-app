<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CategoriasController
{
    public function index()
    {
        if (!Gate::allows('acessar_categorias')) {
            abort(403);
        }
        return view('categorias.index');
    }
}
