<main class="contas_main">
    <div class="contas_content">

        <div class="contas_topo">
            <div class="pagina">
                <span class="pagina_titulo">{{ $titulo }}</span>
                <span class="pagina_subtitulo">{{ $subtitulo }}</span>
            </div>

            @if(isset($botao))
                {{ $botao }}
            @endif

        </div>

        {{ $slot }}

    </div>
</main>
