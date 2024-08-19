@extends('layouts.app')

@section('title', 'Lista de Departamentos')

@section('content')

    {{-- <div class="container">
        <div class="row shadow mt-5">
            <div class="col">

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Pais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Departamentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Municipios</a>
                    </li>
                </ul>
                <h3>Listado de Departamentos</h3>
                <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modaldepartamento">
                    <i class="fa-solid fa-plus"></i> Nuevo
                </button>
                <div class="d-none d-lg-block text-center p-5">
                    <i class="fa-solid fa-earth-americas fa-10x"></i>
                </div>
            </div>
        </div>
    </div> --}}


    @component('components.contenedor-base')
        <div class="col-md-6">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Pais</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane"
                        aria-selected="false">Departamentos</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                        type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Municipios</button>
                </li>
            </ul>

            <h3>Listado de Departamentos</h3>
            <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#modaldepartamento">
                <i class="fa-solid fa-plus"></i> Nuevo
            </button>
            <div class="d-none d-lg-block text-center p-5">
                <i class="fa-solid fa-earth-americas fa-10x"></i>
            </div>
        </div>

        <div class="col-md-6 border">

            <!-- componente para mostrar el formulario de busqueda -->
            @component('components.search-input')
            @endcomponent

            <!-- componente para mostrar las alertas -->
            @component('components.message-alerts')
            @endcomponent

            <div id="message" class="fw-bold text-center fs-2"></div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <h6 class="mt-3"><strong>Pais</strong></h6>
                </div>
                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="table-responsive" id="table-responsive">
                        <table class="table table-hover user-select-none cursor-default">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Departamentos</th>
                                    <th scope="col" class="text-end">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">

                                @foreach ($departamentos as $dpts)
                                    <!-- Incluir el componente de modal para editar el registro de un país -->
                                    @component('components.modal', ['id' => 'editModal' . $dpts->cod_departamento, 'title' => 'Editar Departamento'])
                                        <!-- Contenido del formulario para editar país -->
                                        <form action="{{ route('departamento.update', $dpts->cod_departamento) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <!-- Campos del formulario -->
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-floating">
                                                        <input type="text" class="form-control" id="departamento"
                                                            name="departamento" placeholder="Agregar departamento..."
                                                            value="{{ $dpts->departamento }}" required>
                                                        <label for="departamento">Departameto</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Guardar" class="btn btn-primary my-3">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    @endcomponent

                                    <!-- Incluir el componente de modal para eliminar el registro de un país -->
                                    @component('components.modal', [
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
                </div>
                <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                    <h6 class="mt-3"><strong>Municipios</strong></h6>
                </div>
            </div>

            {{-- <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active text-dark" id="nav-geologico" role="tabpanel"
                    aria-labelledby="nav-geologico-tab" tabindex="0">
                    <h6 class="mt-3"><strong>Elementos Geológicos</strong></h6>
                </div>
            </div>

            <div class="tab-pane fade text-dark" id="nav-estratigraficos" role="tabpanel"
                aria-labelledby="nav-estratigraficos-tab" tabindex="0">
                <h6 class="mt-3"><strong>Elementos G#2</strong></h6>
            </div> --}}
        </div>
    @endcomponent
@endsection
