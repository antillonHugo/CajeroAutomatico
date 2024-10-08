@component('components.modal.modal', ['id' => 'modalMunicipio', 'title' => 'Nuevo Municipio'])
    <!-- Contenido del formulario para agregar un municipio -->
    <form action="{{ route('municipio.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="municipio" name="municipio"
                        placeholder="Agregar municipio...">
                    <label for="municipio">Municipio</label>
                </div>
            </div>
            <div class="col-12">
                <input type="submit" value="Crear" class="btn btn-primary py-2 w-100">
            </div>
        </div>
    </form>
@endcomponent
