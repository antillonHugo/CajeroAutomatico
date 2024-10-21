@component('components.modal.modal', ['id' => 'editModal' . $pais->cod_pais, 'title' => 'Editar Registro'])
    <!-- Contenido del formulario para editar país -->
    <form action="{{ route('pais.update', $pais->cod_pais) }}" method="POST">
        @csrf
        @method('PATCH')
        <!-- Campos del formulario -->
        <div class="row">
            <div class="col mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="pais" name="pais" placeholder="Agregar país..."
                        value="{{ $pais->pais }}" required>
                    <label for="pais">País</label>
                </div>
            </div>
            <div class="col-12">
                <input type="submit" value="Actualizar" class="btn btn-primary py-2 w-100">
            </div>
        </div>
    </form>
@endcomponent
