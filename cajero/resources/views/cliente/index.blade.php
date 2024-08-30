@extends('layouts.app')

@section('title', 'Lista de clientes')
@section('content')
    @component('components.contenedor-secundario')
        <div class="col-lg-12">

            <div class="row">
                <div class="col">
                    <h4 class="py-3">Listado de Clientes</h4>
                    <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modalClientes">
                        <i class="fa-solid fa-plus"></i> Nuevo
                    </button>

                </div>
                <div class="col">
                    <div class="text-center p-5">
                        <i class="fa-regular fa-id-card fa-5x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            @if ($clientes->count() > 0)
                <div class="row justify-content-end">
                    {{-- <div class="col align-self-center border">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Pais</a></li>
                                <li><a class="dropdown-item" href="#"> Departamento</a></li>
                                <li><a class="dropdown-item" href="#">Municipio</a></li>
                            </ul>
                        </div>
                    </div> --}}
                    <div class="col-md-7 col-lg-5">
                        <!-- componente para mostrar el formulario de busqueda -->
                        @component('components.forms.search-input')
                        @endcomponent
                    </div>
                    <div class="col-12">
                        <!-- componente para mostrar las alertas -->
                        @component('components.alert.message-alerts')
                        @endcomponent

                        <h5 class="fw-bold text-center message py-5"></h5>
                        <div class="table-responsive">
                            <table class="table table-hover user-select-none cursor-default">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Dui</th>
                                        <th scope="col">Fecha de Nacimiento</th>
                                        <th scope="col">Celular</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Cod_pais</th>
                                        <th scope="col">Cod_departamento</th>
                                        <th scope="col">Cod_municipio</th>
                                        <th scope="col" class="text-end">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">

                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->cod_cliente }}</td>
                                            <td>{{ $cliente->primer_nombre . ' ' . $cliente->segundo_nombre }}</td>
                                            <td>{{ $cliente->primer_apellido . ' ' . $cliente->segundo_apellido }}</td>
                                            <td>{{ $cliente->dui }}</td>
                                            <td>{{ $cliente->fecha_de_nacimiento }}</td>
                                            <td>{{ $cliente->celular }}</td>
                                            <td>{{ $cliente->correo }}</td>
                                            <td>{{ $cliente->pais->pais }}</td>
                                            <td>{{ $cliente->cod_departamento }}</td>
                                            <td>{{ $cliente->cod_municipio }}</td>
                                        </tr>
                                        <!-- Incluir el componente de modal para editar el registro de un cliente -->
                                        @component('components.modals.modal', [
                                            'id' => 'editModal' . $cliente->cod_cliente,
                                            'title' => 'Editar cliente',
                                        ])
                                            <!-- Contenido del formulario para editar cliente -->
                                            <form action="{{ route('cliente.update', $cliente->cod_cliente) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <!-- Campos del formulario -->
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="cliente" name="cliente"
                                                                placeholder="Agregar cliente..." value="{{ $cliente->cliente }}"
                                                                required>
                                                            <label for="cliente">cliente</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="submit" value="Guardar" class="btn btn-primary my-3">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        @endcomponent

                                        <!-- Incluir el componente de modal para eliminar el registro de un cliente -->
                                        @component('components.modals.modal', [
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
                                    @endforeach

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            @else
                <!-- componente para mostrar la alerta que la tabla no posee registros -->
                @component('components.alert.EmptyTableAlert')
                @endcomponent
            @endif
        </div>

        {{-- <div class="col">
            Enlaces de paginación 
            <div class="p-1 m-2  d-md-flex justify-content-center ">
                {{ $clientes->links() }}
            </div>
        </div> --}}

    @endcomponent


@endsection
