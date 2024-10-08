@component('components.modal.modal', ['id' => 'modalDepartamento', 'title' => 'Nuevo Departamento'])
    <!-- Contenido del formulario para agregar departamento -->
    <form action="{{ route('departamento.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="departamento" name="departamento"
                        placeholder="Agregar un departamento...">
                    <label for="departamento">Departamento</label>
                </div>
            </div>
            <div class="col-12">
                <input type="submit" value="Crear" class="btn btn-primary py-2 w-100">
            </div>
        </div>
    </form>
@endcomponent
