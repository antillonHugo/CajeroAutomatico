@extends('layouts.app')
@section('title', 'Lista de clientes')
@section('content')
    <x-shared.contenedor-secundario>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-8 pt-4">
                    <button class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalClientes">
                        <i class="fa-solid fa-plus"></i> Nuevo
                    </button>
                </div>
                <div class="col-4 d-none d-md-block pt-4">
                    <div class="text-center">
                        <i class="fa-regular fa-id-card fa-5x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            @if ($clientes->count() > 0)
                <form>
                    <fieldset>
                        <legend class="text-center py-3">Filtrar Registros</legend>
                        <div class="row justify-content-center gap-3">
                            <div class="col-sm-5 col-lg-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="nombre" name="nombre"
                                        placeholder="Nombre/Apellido...">
                                    <label for="nombre">Nombre/Apellido</label>
                                </div>
                            </div>
                            <div class="col-sm-5 col-lg-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="dui" id="dui"
                                        placeholder="Dui..." maxlength="10">
                                    <label for="dui">Dui</label>
                                </div>
                            </div>

                            <div class="col-sm-5 col-lg-4">
                                <select class="form-select form-select-lg mb-3" aria-label="Small select example"
                                    id="selectDepartamento" name="selectDepartamento">
                                    <option value="" selected>Departamento</option>
                                    @foreach ($departamentos as $departamento)
                                        <option value="{{ $departamento->cod_departamento }}">
                                            {{ $departamento->departamento }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-5 col-lg-4">
                                <select class="form-select form-select-lg mb-3" aria-label="Small select example"
                                    id="selectMunicipio" name="selectMunicipio">
                                    <option value="" selected>Municipio</option>
                                    @foreach ($municipios as $municipio)
                                        <option value="{{ $municipio->cod_municipio }}">{{ $municipio->municipio }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </form>
            @endif
        </div>
        <div class="col-12">
            <!-- Mostrar errores de validación -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="col-lg-12">
            @if ($clientes->count() > 0)
                <div class="row justify-content-end">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-hover user-select-none cursor-default caption-top">
                                <caption>Lista de Clientes</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Dui</th>
                                        <th scope="col" class="text-nowrap">Fecha de Nacimiento</th>
                                        <th scope="col">Celular</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">País</th>
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Municipio</th>
                                        <th scope="col" class="text-end">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="tbody">
                                    @foreach ($clientes as $cliente)
                                        {{-- incluimos el componente para editar un cliente --}}
                                        @include('cliente.edit')

                                        {{-- incluimos el componente para eliminar un cliente --}}
                                        @include('cliente.destroy')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="d-none contenedorSinDatos">
                            <!-- componente para mostrar cuando el buscador no encuentra resultados al filtrar datos -->
                            <x-alert.mensaje-sin-resultados></x-alert.mensaje-sin-resultados>
                        </div>
                    </div>
                    <div class="col-12 contenedorSinDatos">
                        <!--componente para los enlaces de paginación -->
                        <x-navigation.paginador></x-navigation.paginador>
                    </div>
                </div>
            @else
                <!-- componente para mostrar la alerta que la tabla no posee registros -->
                <x-alert.mensaje-sin-resultados></x-alert.mensaje-sin-resultados>
            @endif
        </div>

        @include('cliente.create')
    </x-shared.contenedor-secundario>
@endsection
@section('scripts')
    <script src="{{ asset('js/cliente.js') }}"></script>
@endsection
