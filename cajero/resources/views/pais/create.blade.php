@component('components.modal.modal', ['id' => 'modalPais', 'title' => 'Nuevo País'])
    <!-- Contenido del formulario para agregar país -->
    <form action="{{ route('pais.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="pais" name="pais" placeholder="Agregar país...">
                    <label for="pais">País</label>
                </div>
            </div>
            <div class="col-12">
                <input type="submit" value="Crear" class="btn btn-primary py-2 w-100">
            </div>
        </div>
    </form>
@endcomponent
