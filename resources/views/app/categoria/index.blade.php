@extends('layout.padrao')

@section('conteudo')

    <x-cadastro-layout
        titulo="Categorias"
        subtitulo="Cadastro > Categorias"
    >

        <x-slot:botao>
            <button class="contas_btn" data-bs-toggle="modal" data-bs-target="#modalCategoria">
                Nova Categoria
            </button>
        </x-slot>

        @include('app.categoria.components.table')

    </x-cadastro-layout>

    @include('app.categoria.modals.create')

@endsection
