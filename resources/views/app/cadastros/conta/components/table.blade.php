<table class="table table-hover mt-4" style="border-radius: 25px">
    <thead>
    <tr>
        <th scope="col">Código</th>
        <th scope="col">Conta</th>
    </tr>
    </thead>
    <tbody>
    @foreach($contas as $conta)

        <tr>
            <td>{{ $conta->id }}</td>
            <td>{{ $conta->nome }}</td>
        </tr>

    @endforeach

    </tbody>
</table>
