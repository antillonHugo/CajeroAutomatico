<div class="table-responsive">
    <table class="table table-hover user-select-none cursor-default caption-top">
        <caption>Lista de Paises</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">País</th>
                <th scope="col" class="text-end">Acciones</th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($paises as $pais)
                <!-- Incluir el componente de modal para editar el registro de un país -->
                @component('components.modal.modal', ['id' => 'editModal' . $pais->cod_pais, 'title' => 'Editar País'])
                    <!-- Contenido del formulario para editar país -->
                    <form action="{{ route('pais.update', $pais->cod_pais) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Campos del formulario -->
                        <div class="row">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="pais" name="pais"
                                        placeholder="Agregar país..." value="{{ $pais->pais }}" required>
                                    <label for="pais">País</label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Actualizar" class="btn btn-primary my-3">
                                </div>
                            </div>
                        </div>
                    </form>
                @endcomponent

                <!-- Incluir el componente de modal para eliminar el registro de un país -->
                @component('components.modal.modal', ['id' => 'deleteModal' . $pais->cod_pais, 'title' => 'Eliminar País'])
                    <!-- Contenido del formulario para eliminar país -->
                    <form action="{{ route('pais.destroy', $pais->cod_pais) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <p>Confirme si desea eliminar el país</p>
                        <button type="button" class="btn btn-default btn-sm border" data-bs-dismiss="modal"
                            aria-label="Close">Cancelar</button>
                        <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
                    </form>
                @endcomponent
            @endforeach

        </tbody>
    </table>
</div>
