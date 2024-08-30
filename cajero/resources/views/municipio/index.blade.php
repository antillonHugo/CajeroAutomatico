@extends('layouts.app')

@section('title', 'Lista de Departamentos')

@section('content')
    @component('components.contenedor-base')
        <div class="col-12">
            @component('components.navigation.MenuNavegacionPais')
            @endcomponent
        </div>
        <div class="col-lg-6">

            <h4 class="py-3">Listado de Municipios</h4>
            <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalMunicipio">
                <i class="fa-solid fa-plus"></i> Nuevo
            </button>
            <div class="d-none d-lg-block text-center p-5">
                <i class="fa-solid fa-earth-americas fa-8x"></i>
            </div>
        </div>

        <div class="col-lg-6">
            @if ($municipios->count() > 0)
                <!-- componente para mostrar el formulario de busqueda -->
                @component('components.forms.search-input')
                @endcomponent

                <!-- componente para mostrar las alertas -->
                @component('components.alert.message-alerts')
                @endcomponent

                <h5 class="fw-bold text-center message py-5"></h5>
                <div class="table-responsive">
                    <table class="table table-hover user-select-none cursor-default">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Municipios</th>
                                <th scope="col" class="text-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">

                            @foreach ($municipios as $municipio)
                                <!-- Incluir el componente de modal para editar el registro de un país -->
                                @component('components.modals.modal', [
                                    'id' => 'editModal' . $municipio->cod_municipio,
                                    'title' => 'Editar Municipio',
                                ])
                                    <!-- Contenido del formulario para editar país -->
                                    <form action="{{ route('municipio.update', $municipio->cod_municipio) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <!-- Campos del formulario -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="municipio" name="municipio"
                                                        placeholder="Agregar municipio..." value="{{ $municipio->municipio }}"
                                                        required>
                                                    <label for="municipio">Municipio</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Guardar" class="btn btn-primary my-3">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endcomponent

                                <!-- Incluir el componente de modal para eliminar el registro de un Municipio -->
                                @component('components.modals.modal', [
                                    'id' => 'deleteModal' . $municipio->cod_municipio,
                                    'title' => 'Eliminar Municipio',
                                ])
                                    <!-- Contenido del formulario para eliminar el Municipio -->
                                    <form action="{{ route('municipio.destroy', $municipio->cod_municipio) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <p>Confirme si desea eliminar el Municipio</p>
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

        <!-- Incluir el componente de modal para crear el registro un municipio -->
        @component('components.modals.modal', ['id' => 'modalMunicipio', 'title' => 'Nuevo Municipio'])
            <!-- Contenido del formulario para agregar un municipio -->
            <form action="{{ route('municipio.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="municipio" name="municipio"
                                placeholder="Agregar municipio...">
                            <label for="municipio">Municipio</label>
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
