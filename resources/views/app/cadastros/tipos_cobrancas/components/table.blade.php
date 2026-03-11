<table class="table table-hover mt-4" style="border-radius: 25px">
    <thead>
    <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tipos_cobrancas as $tipo_cobranca)

        <tr>
            <td>{{ $tipo_cobranca->id }}</td>
            <td>{{ $tipo_cobranca->nome }}</td>
        </tr>

    @endforeach

    </tbody>
</table>
