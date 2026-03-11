@extends('layout.padrao')

@section('conteudo')

    <x-cadastro-layout
        titulo="Tipos de pagamentos"
        subtitulo="Cadastro > Tipos de pagamentos"
    >

        <x-slot:botao>
            <button class="contas_btn" data-bs-toggle="modal" data-bs-target="#modalTiposPagamentos">
                Novo tipo de pagamento
            </button>
        </x-slot>

        @include('app.tipos_pagamentos.components.table')

    </x-cadastro-layout>

    @include('app.tipos_pagamentos.modals.create')

@endsection
