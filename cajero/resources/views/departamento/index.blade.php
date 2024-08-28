@extends('layouts.app')

@section('title', 'Lista de Departamentos')

@section('content')
    @component('components.contenedor-base')
        <div class="col-12">
            @component('components.navigation.MenuNavegacionPais')
            @endcomponent
        </div>
        <div class="col-lg-6">

            <h4 class="py-3">Listado de Departamentos</h4>
            <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalDepartamento">
                <i class="fa-solid fa-plus"></i> Nuevo
            </button>
            <div class="d-none d-lg-block text-center p-5">
                <i class="fa-solid fa-earth-americas fa-8x"></i>
            </div>
        </div>

        <div class="col-lg-6">

            <h5 class="fw-bold text-center fs-2 message"></h5>

            @if ($departamentos->count() > 0)
                <!-- componente para mostrar el formulario de busqueda -->
                @component('components.forms.search-input')
                @endcomponent

                <!-- componente para mostrar las alertas -->
                @component('components.alert.message-alerts')
                @endcomponent
                <div class="table-responsive">
                    <table class="table table-hover user-select-none cursor-default">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Departamentos</th>
                                <th scope="col" class="text-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">

                            @foreach ($departamentos as $dpts)
                                <!-- Incluir el componente de modal para editar el registro de un país -->
                                @component('components.modals.modal', [
                                    'id' => 'editModal' . $dpts->cod_departamento,
                                    'title' => 'Editar Departamento',
                                ])
                                    <!-- Contenido del formulario para editar país -->
                                    <form action="{{ route('departamento.update', $dpts->cod_departamento) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <!-- Campos del formulario -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="departamento" name="departamento"
                                                        placeholder="Agregar departamento..." value="{{ $dpts->departamento }}"
                                                        required>
                                                    <label for="departamento">Departamento</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Guardar" class="btn btn-primary my-3">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endcomponent

                                <!-- Incluir el componente de modal para eliminar el registro de un país -->
                                @component('components.modals.modal', [
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
                            @endforeach

                        </tbody>
                    </table>
                </div>
            @else
                <!-- componente para mostrar la alerta que la tabla no posee registros -->
                @component('components.alert.EmptyTableAlert')
                @endcomponent
            @endif

        </div>

        <!-- Incluir el componente de modal para crear el registro de un país -->
        @component('components.modals.modal', ['id' => 'modalDepartamento', 'title' => 'Nuevo Departamento'])
            <!-- Contenido del formulario para agregar país -->
            <form action="{{ route('departamento.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="departamento" name="departamento"
                                placeholder="Agregar un departamento...">
                            <label for="departamento">Departamento</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Guardar" class="btn btn-primary my-3">
                        </div>
                    </div>
                </div>
            </form>
        @endcomponent
    @endcomponent
@endsection
