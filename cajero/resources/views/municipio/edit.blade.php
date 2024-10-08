@component('components.modal.modal', [
    'id' => 'editModal' . $municipio->cod_municipio,
    'title' => 'Editar Registro',
])
    <!-- Contenido del formulario para editar un registro -->
    <form action="{{ route('municipio.update', $municipio->cod_municipio) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Campos del formulario -->
        <div class="row">
            <div class="col mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Agregar municipio..."
                        value="{{ $municipio->municipio }}" required>
                    <label for="municipio">Municipio</label>
                </div>
            </div>
            <div class="col-12">
                <input type="submit" value="Actualizar" class="btn btn-primary py-2 w-100">
            </div>
        </div>
    </form>
@endcomponent
