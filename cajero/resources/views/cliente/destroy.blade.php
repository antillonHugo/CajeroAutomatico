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
