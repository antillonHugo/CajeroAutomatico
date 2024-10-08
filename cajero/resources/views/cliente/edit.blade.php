 <!-- Incluir el componente de modal para editar el registro de un cliente -->
 @component('components.modal.modal', [
     'id' => 'editModal' . $cliente->cod_cliente,
     'title' => 'Editar Registro',
 ])
     <!-- Contenido del formulario para editar cliente -->
     <form action="{{ route('cliente.update', $cliente->cod_cliente) }}" method="POST">
         @csrf
         @method('PUT')

         <!-- Campos del formulario -->
         <div class="row">
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" id="primerNombre" name="primerNombre" placeholder="Primer Nombre"
                         value="{{ $cliente->primer_nombre }}" required>
                     <label for="primerNombre">Primer Nombre</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="segundoNombre" id="segundoNombre"
                         placeholder="Segundo Nombre" value="{{ $cliente->segundo_nombre }}">
                     <label for="segundoNombre">Segundo Nombre</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="primerApellido" id="primerApellido"
                         placeholder="Primer Apellido" value="{{ $cliente->primer_apellido }}">
                     <label for="primerApellido">Primer Apellido</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="segundoApellido" id="segundoApellido"
                         placeholder="Segundo Apellido" value="{{ $cliente->segundo_apellido }}">
                     <label for="segundoApellido">Segundo Apellido</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="dui" id="dui" placeholder="Dui"
                         value="{{ $cliente->dui }}">
                     <label for="dui">Dui</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="fechaNacimiento" id="fechaNacimiento"
                         placeholder="Fecha Nacimiento" value="{{ $cliente->getFechaNacimientoFormattedAttribute() }}"
                         maxlength="10">
                     <label for="fechaNacimiento">Fecha Nacimiento</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular"
                         value="{{ $cliente->celular }}">
                     <label for="celular">Celular</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <select class="form-select form-select-lg mb-3" aria-label="Small select example" id="selectPais"
                     name="selectPais">
                     @foreach ($paises as $pais)
                         <option value="{{ $cliente->cod_pais }}"
                             {{ $cliente->cod_pais == $pais->cod_pais ? 'selected' : '' }}>
                             {{ $pais->pais }}
                         </option>
                     @endforeach
                 </select>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <select class="form-select form-select-lg mb-3" aria-label="Small select example" id="selectDepartamento"
                     name="selectDepartamento">
                     @foreach ($departamentos as $departamento)
                         <option value="{{ $cliente->cod_departamento }}"
                             {{ $cliente->cod_departamento == $departamento->cod_departamento ? 'selected' : '' }}>
                             {{ $departamento->departamento }}
                         </option>
                     @endforeach
                 </select>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <select class="form-select form-select-lg mb-3" aria-label="Small select example" id="selectMunicipio"
                     name="selectMunicipio">
                     @foreach ($municipios as $municipio)
                         <option value="{{ $cliente->cod_municipio }}"
                             {{ $cliente->cod_municipio == $municipio->cod_municipio ? 'selected' : '' }}>
                             {{ $municipio->municipio }}
                         </option>
                     @endforeach
                 </select>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="email" class="form-control" name="correo" id="correo" placeholder="correo"
                         value="{{ $cliente->correo }}">
                     <label for="correo">Correo</label>
                 </div>
             </div>

         </div>
         <div class="col-12">
             <input type="submit" value="Actualizar" class="btn btn-primary w-100 py-2">
         </div>
     </form>
 @endcomponent
