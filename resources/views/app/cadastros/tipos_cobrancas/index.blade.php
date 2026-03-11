@extends('layout.padrao')

@section('conteudo')

    <x-cadastro-layout
        titulo="Tipos de cobranças"
        subtitulo="Cadastro > Tipos de cobranças"
    >

        <x-slot:botao>
            <button class="contas_btn" data-bs-toggle="modal" data-bs-target="#modalTiposCobrancas">
                Novo tipo de cobrança
            </button>
        </x-slot>

        @include('app.cadastros.tipos_cobrancas.components.table')

    </x-cadastro-layout>

    @include('app.cadastros.tipos_cobrancas.modals.create')

@endsection
