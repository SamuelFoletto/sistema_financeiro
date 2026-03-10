@extends('layout.padrao')

@section('conteudo')
    <main class="contas_main">
        <div class="contas_content">
            <div class="contas_topo">
                <div class="pagina">
                    <span class="pagina_titulo">Categorias</span>
                    <span class="pagina_subtitulo">Cadastro > Categorias</span>
                </div>


                <button class="contas_btn" data-bs-toggle="modal" data-bs-target="#modalCategoria">
                    Nova Categoria
                </button>

            </div>

            @include('app.categoria.components.table')


        </div>
    </main>

    @include('app.categoria.modals.create')
@endsection
