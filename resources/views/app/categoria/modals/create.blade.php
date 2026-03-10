<div class="modal fade" id="modalCategoria" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title">Nova Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <form method="POST" action="{{ route('categoria.store') }}">
                @csrf

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control">
                    </div>

                    <select class="form-select" aria-label="Default select example">
                        <option value="Receita">Receita</option>
                        <option value="Despesa">Despesa</option>
                    </select>



                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancelar
                    </button>

                    <button type="submit" class="btn btn-primary">
                        Salvar
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
