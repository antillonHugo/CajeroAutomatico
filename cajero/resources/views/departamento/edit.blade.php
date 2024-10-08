@component('components.modal.modal', [
    'id' => 'editModal' . $dpts->cod_departamento,
    'title' => 'Editar Registro',
])
    <!-- Contenido del formulario para editar país -->
    <form action="{{ route('departamento.update', $dpts->cod_departamento) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Campos del formulario -->
        <div class="row">
            <div class="col mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="departamento" name="departamento"
                        placeholder="Agregar departamento..." value="{{ $dpts->departamento }}" required>
                    <label for="departamento">Departamento</label>
                </div>
            </div>
            <div class="col-12">
                <input type="submit" value="Actualizar" class="btn btn-primary py-2 w-100">
            </div>
        </div>
    </form>
@endcomponent
