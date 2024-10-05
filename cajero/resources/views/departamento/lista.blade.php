<div class="table-responsive">
    <table class="table table-hover user-select-none cursor-default caption-top">
        <caption>Lista de Departamentos</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Departamento</th>
                <th scope="col" class="text-end">Acciones</th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($departamentos as $dpts)
                <!-- Incluir el componente de modal para editar el registro de un país -->
                @component('components.modal.modal', [
                    'id' => 'editModal' . $dpts->cod_departamento,
                    'title' => 'Editar Departamento',
                ])
                    <!-- Contenido del formulario para editar país -->
                    <form action="{{ route('departamento.update', $dpts->cod_departamento) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Campos del formulario -->
                        <div class="row">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="departamento" name="departamento"
                                        placeholder="Agregar departamento..." value="{{ $dpts->departamento }}" required>
                                    <label for="departamento">Departamento</label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Guardar" class="btn btn-primary my-3">
                                </div>
                            </div>
                        </div>
                    </form>
                @endcomponent

                <!-- Incluir el componente de modal para eliminar el registro de un país -->
                @component('components.modal.modal', [
                    'id' => 'deleteModal' . $dpts->cod_departamento,
                    'title' => 'Eliminar Departamento',
                ])
                    <!-- Contenido del formulario para eliminar país -->
                    <form action="{{ route('departamento.destroy', $dpts->cod_departamento) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <p>Confirme si desea eliminar el Departamento</p>
                        <button type="button" class="btn btn-default btn-sm border" data-bs-dismiss="modal"
                            aria-label="Close">Cancelar</button>
                        <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
                    </form>
                @endcomponent
            @endforeach
        </tbody>
    </table>
</div>
