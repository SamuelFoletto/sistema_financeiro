<table class="table table-hover mt-4" style="border-radius: 25px">
    <thead>
    <tr>
        <th scope="col">Código</th>
        <th scope="col">Categoria</th>
        <th scope="col">Tipo</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)

        <tr>
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nome }}</td>
            <td>{{ $categoria->tipo }}</td>
        </tr>

    @endforeach

    </tbody>
</table>
