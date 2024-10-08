@extends('layouts.app')

@section('title', 'Lista de Departamentos')
@section('content')
    <x-shared.contenedor-primario>
        <div class="col-12">
            <!-- componente para mostrar el menú de navegacion -->
            <x-navigation.MenuNavegacionPais></x-navigation.MenuNavegacionPais>
        </div>
        <div class="col-sm-4 py-md-3">
            <button class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalMunicipio">
                <i class="fa-solid fa-plus"></i> Nuevo
            </button>
        </div>
        @if ($municipios->count() > 0)
            <div class="col col-lg-8 py-md-3">
                <!-- componente para mostrar el formulario de busqueda o filtro  -->
                <x-form.buscador></x-forms.form.buscador>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-hover user-select-none cursor-default caption-top">
                        <caption>Lista de Municipios</caption>
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Municipio</th>
                                <th scope="col" class="text-end">Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="tbody">
                            @foreach ($municipios as $municipio)
                                <!-- Incluir el componente para editar el registro -->
                                @include('municipio.edit')

                                <!-- Incluir el componente para eliminar un registro  -->
                                @include('municipio.destroy')
                            @endforeach

                        </tbody>
                    </table>
                </div>


                <div class="d-none contenedorSinDatos">
                    <!-- componente para mostrar cuando el buscador no encuentra resultados al filtrar datos-->
                    <x-alert.mensaje-sin-resultados></x-alert.mensaje-sin-resultados>
                </div>
            </div>
            <div class="col-12 contenedorSinDatos">
                <!--componente para los enlaces de paginación -->
                <x-navigation.paginador></x-navigation.paginador>
            </div>
        @else
            <!-- componente para mostrar la alerta que la tabla no posee registros -->
            <x-alert.mensaje-sin-resultados></x-alert.mensaje-sin-resultados>
        @endif

        <!-- Incluir el componente para crear un registro -->
      @include("municipio.store")
    </x-shared.contenedor-primario>
@endsection
@section('scripts')
    <!--archivo js para el buscador de los formularios-->
    <script src="{{ asset('js/region.js') }}"></script>
@endsection
