@extends('layout.padrao')

@section('conteudo')

    <x-cadastro-layout
        titulo="Fluxo Financeiro"
        subtitulo="Fluxo Financeiro > Receitas"
    >

        <x-slot:botao>
            <button class="contas_btn">
                Nova Receita
            </button>
        </x-slot>


{{--        <div class="w-100 mt-3">--}}
{{--            @component('app.fluxo.receitas.components.form_create_edit')--}}

{{--            @endcomponent--}}

{{--        </div>--}}

    </x-cadastro-layout>


@endsection
