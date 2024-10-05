<div class="table-responsive">
    <table class="table table-hover user-select-none cursor-default caption-top">
        <caption>Lista de Clientes</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Dui</th>
                <th scope="col" class="text-nowrap">Fecha de Nacimiento</th>
                <th scope="col">Celular</th>
                <th scope="col">Correo</th>
                <th scope="col">País</th>
                <th scope="col">Departamento</th>
                <th scope="col">Municipio</th>
                <th scope="col" class="text-end">Acciones</th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($clientes as $cliente)
                <!-- Incluir el componente de modal para editar el registro de un cliente -->
                @component('components.modal.modal', [
                    'id' => 'editModal' . $cliente->cod_cliente,
                    'title' => 'Editar cliente',
                ])
                    <!-- Contenido del formulario para editar cliente -->
                    <form action="{{ route('cliente.update', $cliente->cod_cliente) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <!-- Campos del formulario -->
                        <div class="row">
                            <div class="col">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="cliente" name="cliente"
                                        placeholder="Agregar cliente..." value="{{ $cliente->cliente }}" required>
                                    <label for="cliente">cliente</label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Guardar" class="btn btn-primary my-3">
                                </div>
                            </div>
                        </div>
                    </form>
                @endcomponent

                <!-- Incluir el componente de modal para eliminar el registro de un cliente -->
                @component('components.modal.modal', [
                    'id' => 'deleteModal' . $cliente->cod_cliente,
                    'title' => 'Eliminar Cliente',
                ])
                    <!-- Contenido del formulario para eliminar cliente -->
                    <form action="{{ route('cliente.destroy', $cliente->cod_cliente) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <p>Confirme si desea eliminar el cliente</p>
                        <button type="button" class="btn btn-default btn-sm border" data-bs-dismiss="modal"
                            aria-label="Close">Cancelar</button>
                        <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
                    </form>
                @endcomponent
            @endforeach
        </tbody>
    </table>
</div>
