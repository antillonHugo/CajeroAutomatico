@component('components.modal.modal', ['id' => 'deleteModal' . $pais->cod_pais, 'title' => 'Eliminar País'])
    <!-- Contenido del formulario para eliminar país -->
    <form action="{{ route('pais.destroy', $pais->cod_pais) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Confirme si desea eliminar el país</p>
        <button type="button" class="btn btn-default btn-sm border" data-bs-dismiss="modal"
            aria-label="Close">Cancelar</button>
        <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
    </form>
@endcomponent
