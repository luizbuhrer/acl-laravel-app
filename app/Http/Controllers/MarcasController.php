<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class MarcasController
{
    public function index()
    {
        if (!Gate::allows('acessar_marcas')) {
            abort(403);
        }
        return view('marcas.index');
    }
}
?>