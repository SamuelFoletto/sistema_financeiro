@extends('layout.padrao')

@section('conteudo')
    <main class="contas_main">
        <div class="contas_content">
            <div class="contas_topo">
                <div class="pagina">
                    <span class="pagina_titulo">Contas</span>
                    <span class="pagina_subtitulo">Cadastro > Contas</span>
                </div>


                <button class="contas_btn" data-bs-toggle="modal" data-bs-target="#modalConta">
                    Nova Conta
                </button>

            </div>

            @include('app.conta.components.table')


        </div>
    </main>

    @include('app.conta.modals.create')
@endsection
