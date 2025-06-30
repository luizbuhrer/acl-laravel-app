<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProdutosController
{
    public function index()
    {
        if (!Gate::allows('acessar_produtos')) {
            abort(403);
        }
        return view('produtos.index');
    }
}
