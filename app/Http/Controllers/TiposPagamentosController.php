<?php

namespace App\Http\Controllers;

use App\Models\TiposPagamento;
use Illuminate\Http\Request;

class TiposPagamentosController extends Controller
{
    public function index()
    {
        $tipos_pagamentos = TiposPagamento::all();
        return view('app.cadastros.tipos_pagamentos.index', ['tipos_pagamentos' => $tipos_pagamentos]);
    }

    public function store(Request $request)
    {
        TiposPagamento::create($request->all());
        return redirect()->route('tipos_pagamentos.index');
    }
}
