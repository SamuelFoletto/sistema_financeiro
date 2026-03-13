@extends('layout.padrao')

@section('conteudo')

    <x-cadastro-layout
        titulo="Fluxo Financeiro"
        subtitulo="Fluxo Financeiro > Receitas"
    >

        <x-slot:botao>
            <a href="{{route('movimentacoes.create')}}">
                <button class="contas_btn">
                    Nova Receita
                </button>

            </a>
        </x-slot>

        @include('app.fluxo.receitas.components.table')

    </x-cadastro-layout>


@endsection
