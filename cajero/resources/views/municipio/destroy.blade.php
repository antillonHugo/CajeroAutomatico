@component('components.modal.modal', [
    'id' => 'deleteModal' . $municipio->cod_municipio,
    'title' => 'Eliminar Municipio',
])
    <!-- Contenido del formulario para eliminar el Municipio -->
    <form action="{{ route('municipio.destroy', $municipio->cod_municipio) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Confirme si desea eliminar el municipio</p>
        <button type="button" class="btn btn-default btn-sm border" data-bs-dismiss="modal"
            aria-label="Close">Cancelar</button>
        <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
    </form>
@endcomponent