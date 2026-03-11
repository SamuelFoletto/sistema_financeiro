<?php

namespace App\Http\Controllers;

use App\Models\TiposCobrancas;
use Illuminate\Http\Request;

class TiposCobrancasController extends Controller
{
    public function index(){
        $tipos_cobrancas = TiposCobrancas::all();
        return view('app.cadastros.tipos_cobrancas.index', ['tipos_cobrancas' => $tipos_cobrancas]);
    }

    public function store(Request $request)
    {
        TiposCobrancas::create($request->all());
        return redirect()->route('tipos_cobrancas.index');
    }
}
