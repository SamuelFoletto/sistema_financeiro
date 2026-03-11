<table class="table table-hover mt-4" style="border-radius: 25px">
    <thead>
    <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tipos_pagamentos as $tipo_pagamento)

        <tr>
            <td>{{ $tipo_pagamento->id }}</td>
            <td>{{ $tipo_pagamento->nome }}</td>
        </tr>

    @endforeach

    </tbody>
</table>
