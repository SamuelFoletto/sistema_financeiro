@extends('layout.padrao')

@section('conteudo')

    <x-cadastro-layout
        titulo="Contas"
        subtitulo="Cadastro > Contas"
    >

        <x-slot:botao>
            <button class="contas_btn" data-bs-toggle="modal" data-bs-target="#modalConta">
                Nova Conta
            </button>
        </x-slot>

        @include('app.conta.components.table')

    </x-cadastro-layout>

    @include('app.conta.modals.create')

@endsection
