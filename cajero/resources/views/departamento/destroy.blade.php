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