<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;
class ContaController extends Controller
{
    public function __construct(Conta $conta)
    {
        $this->conta = $conta;
    }

    public function index()
    {
        $contas = Conta::all();
        return view('app.cadastros.conta.index', ['contas' => $contas]);
    }

    public function store(Request $request)
    {
        Conta::create($request->all());

        return redirect()->route('conta.index');
    }
}
