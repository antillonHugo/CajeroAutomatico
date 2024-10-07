@extends('layouts.app')

@section('title', 'Lista de Paises')
@section('content')

    <x-shared.contenedor-primario>
        <div class="col-12">
            <!-- componente para mostrar el menú de navegacion -->
            <x-navigation.MenuNavegacionPais></x-navigation.MenuNavegacionPais>
        </div>
        <div class="col-sm-4 py-md-3">
            <button class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalPais">
                <i class="fa-solid fa-plus"></i> Nuevo
            </button>
        </div>
        @if ($paises->count() > 0)
            <div class="col col-lg-8 py-md-3">
                <!-- componente para mostrar el formulario de busqueda o filtro -->
                <x-form.buscador></x-forms.form.buscador>
            </div>
            <div class="col-lg-12">
                @include('./pais.lista')

                <div class="d-none contenedorSinDatos">
                    <!-- componente para mostrar cuando el buscador no encuentra resultados al filtrar datos -->
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

        <!-- Incluir el componente de modal para crear el registro de un país -->
        @component('components.modal.modal', ['id' => 'modalPais', 'title' => 'Nuevo País'])
            <!-- Contenido del formulario para agregar país -->
            <form action="{{ route('pais.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="pais" name="pais"
                                placeholder="Agregar país...">
                            <label for="pais">País</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Guardar" class="btn btn-primary my-3">
                        </div>
                    </div>
                </div>
            </form>
        @endcomponent
    </x-shared.contenedor-primario>
@endsection
@section('scripts')
    <!--archivo js para el buscador de los formularios-->
    <script src="{{ asset('js/region.js') }}"></script>
@endsection
