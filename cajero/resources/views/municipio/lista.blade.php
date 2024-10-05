<div class="table-responsive">
    <table class="table table-hover user-select-none cursor-default caption-top">
        <caption>Lista de Municipios</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Municipio</th>
                <th scope="col" class="text-end">Acciones</th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($municipios as $municipio)
                <!-- Incluir el componente de modal para editar el registro de un país -->
                @component('components.modal.modal', [
                    'id' => 'editModal' . $municipio->cod_municipio,
                    'title' => 'Editar Municipio',
                ])
                    <!-- Contenido del formulario para editar país -->
                    <form action="{{ route('municipio.update', $municipio->cod_municipio) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Campos del formulario -->
                        <div class="row">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="municipio" name="municipio"
                                        placeholder="Agregar municipio..." value="{{ $municipio->municipio }}" required>
                                    <label for="municipio">Municipio</label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Guardar" class="btn btn-primary my-3">
                                </div>
                            </div>
                        </div>
                    </form>
                @endcomponent

                <!-- Incluir el componente de modal para eliminar el registro de un Municipio -->
                @component('components.modal.modal', [
                    'id' => 'deleteModal' . $municipio->cod_municipio,
                    'title' => 'Eliminar Municipio',
                ])
                    <!-- Contenido del formulario para eliminar el Municipio -->
                    <form action="{{ route('municipio.destroy', $municipio->cod_municipio) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <p>Confirme si desea eliminar el Municipio</p>
                        <button type="button" class="btn btn-default btn-sm border" data-bs-dismiss="modal"
                            aria-label="Close">Cancelar</button>
                        <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
                    </form>
                @endcomponent
            @endforeach

        </tbody>
    </table>
</div>