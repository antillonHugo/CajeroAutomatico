@extends('layouts.app')

@section('title', 'Lista de paises')

@section('content')

    @component('components.contenedor-base')

        <div class="col-md-8 col-lg-5">
            <h3>Listado de países</h3>

            <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalPais">
                <i class="fa-solid fa-plus"></i> Nuevo
            </button>

            <div class="d-none d-lg-block text-center p-5">
                <i class="fa-solid fa-earth-americas fa-10x"></i>
            </div>
        </div>
        <div class="col-md-8 col-lg-5">

            @if ($paises->isEmpty())
                <h3 class="text-center">Actualmente no hay registros de países.</h3>
            @else
                <!-- componente para mostrar el formulario de busqueda -->
                @component('components.search-input')
                @endcomponent

                <!-- componente para mostrar las alertas -->
                @component('components.message-alerts')
                @endcomponent

                <div id="message" class="fw-bold text-center fs-2"></div>

                <div class="table-responsive" id="table-responsive">
                    <table class="table table-hover user-select-none cursor-default">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">País</th>
                                <th scope="col" class="text-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">

                            @foreach ($paises as $pais)
                                <!-- Incluir el componente de modal para editar el registro de un país -->
                                @component('components.modal', ['id' => 'editModal' . $pais->cod_pais, 'title' => 'Editar País'])
                                    <!-- Contenido del formulario para editar país -->
                                    <form action="{{ route('paises.update', $pais->cod_pais) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <!-- Campos del formulario -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="pais" name="pais"
                                                        placeholder="Agregar país..." value="{{ $pais->pais }}" required>
                                                    <label for="pais">País</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Guardar" class="btn btn-primary my-3">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endcomponent

                                <!-- Incluir el componente de modal para eliminar el registro de un país -->
                                @component('components.modal', ['id' => 'deleteModal' . $pais->cod_pais, 'title' => 'Eliminar País'])
                                    <!-- Contenido del formulario para eliminar país -->
                                    <form action="{{ route('paises.destroy', $pais->cod_pais) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <p>Confirme si desea eliminar el país</p>
                                        <button type="button" class="btn btn-default btn-sm border" data-bs-dismiss="modal"
                                            aria-label="Close">Cancelar</button>
                                        <button type="submit" class="btn btn-primary btn-sm">Confirmar</button>
                                    </form>
                                @endcomponent
                            @endforeach

                        </tbody>
                    </table>
                </div>
            @endif
        </div>

    @endcomponent

    <!-- Incluir el componente de modal para crear el registro de un país -->
    @component('components.modal', ['id' => 'modalPais', 'title' => 'Nuevo País'])
        <!-- Contenido del formulario para agregar país -->
        <form action="{{ route('paises.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="pais" name="pais" placeholder="Agregar país...">
                        <label for="pais">País</label>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Guardar" class="btn btn-primary my-3">
                    </div>
                </div>
            </div>
        </form>
    @endcomponent







@endsection
