@component('components.modal.modal', ['id' => 'modalClientes', 'title' => 'Nuevo Registro'])
    <!-- Contenido del formulario para agregar un cliente -->
    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <!-- Campos del formulario -->
        <div class="row">
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="primer_nombre" name="primer_nombre"
                        placeholder="Primer Nombre" required>
                    <label for="primer_nombre">Primer Nombre</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre"
                        placeholder="Segundo Nombre">
                    <label for="segundo_nombre">Segundo Nombre</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="primer_apellido" id="primer_apellido"
                        placeholder="Primer Apellido" required>
                    <label for="primer_apellido">Primer Apellido</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido"
                        placeholder="Segundo Apellido">
                    <label for="segundo_apellido">Segundo Apellido</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="dui" id="dui" placeholder="Dui"
                        minlength="10" maxlength="10" required>
                    <label for="dui">Dui</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="fecha_de_nacimiento" id="fecha_de_nacimiento"
                        placeholder="Fecha Nacimiento" minlength="10" maxlength="10" required>
                    <label for="fecha_de_nacimiento">Fecha Nacimiento</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular"
                        minlength="9" maxlength="9" required>
                    <label for="celular">Celular</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <div class="form-floating">
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="correo" required>
                    <label for="correo">Correo</label>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6">
                <select class="form-select form-select-lg mb-3" aria-label="Small select example" id="cod_pais"
                    name="cod_pais" required>
                    <option value="" selected>País</option>
                    @foreach ($paises as $pais)
                        <option value="{{ $pais->cod_pais }}">
                            {{ $pais->pais }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6 col-lg-6">
                <select class="form-select form-select-lg mb-3" aria-label="Small select example" id="cod_departamento"
                    name="cod_departamento" required>
                    <option value="" selected>Departamento</option>
                    @foreach ($departamentos as $departamento)
                        <option value="{{ $departamento->cod_departamento }}">
                            {{ $departamento->departamento }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-6 col-lg-6 mb-3">
                <select class="form-select form-select-lg mb-3" aria-label="Small select example" id="cod_municipio"
                    name="cod_municipio" required>
                    <option value="" selected>Municipio</option>
                    @foreach ($municipios as $municipio)
                        <option value="{{ $municipio->cod_municipio }}">{{ $municipio->municipio }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-12">
            <input type="submit" value="Crear" class="btn btn-primary w-100 py-2">
        </div>
    </form>
@endcomponent
