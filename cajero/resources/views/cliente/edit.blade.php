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
                     <input type="text" class="form-control" id="primer_nombre" name="primer_nombre"
                         placeholder="Primer Nombre" value="{{ $cliente->primer_nombre }}" required>
                     <label for="primer_nombre">Primer Nombre</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="segundo_nombre" id="segundo_nombre"
                         placeholder="Segundo Nombre" value="{{ $cliente->segundo_nombre }}">
                     <label for="segundo_nombre">Segundo Nombre</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="primer_apellido" id="primer_apellido"
                         placeholder="Primer Apellido" value="{{ $cliente->primer_apellido }}" required>
                     <label for="primer_apellido">Primer Apellido</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="segundo_apellido" id="segundo_apellido"
                         placeholder="Segundo Apellido" value="{{ $cliente->segundo_apellido }}">
                     <label for="segundo_apellido">Segundo Apellido</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="dui" id="dui" placeholder="Dui"
                         value="{{ $cliente->dui }}" minlength="10" max="10" required>
                     <label for="dui">Dui</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="fecha_de_nacimiento" id="fecha_de_nacimiento"
                         placeholder="Fecha Nacimiento" value="{{ $cliente->getFechaNacimientoFormattedAttribute() }}"
                         minlength="10" maxlength="10" required>
                     <label for="fecha_de_nacimiento">Fecha Nacimiento</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="text" class="form-control" name="celular" id="celular" placeholder="Celular"
                         value="{{ $cliente->celular }}" minlength="9" maxlength="9" required>
                     <label for="celular">Celular</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <div class="form-floating">
                     <input type="email" class="form-control" name="correo" id="correo" placeholder="correo"
                         value="{{ $cliente->correo }}" required>
                     <label for="correo">Correo</label>
                 </div>
             </div>
             <div class="col-sm-6 col-lg-6">
                 <select class="form-select form-select-lg mb-3" aria-label="Small select example" id="cod_pais"
                     name="cod_pais" required>
                     @foreach ($paises as $pais)
                         <option value="{{ $cliente->cod_pais }}"
                             {{ $cliente->cod_pais == $pais->cod_pais ? 'selected' : '' }}>
                             {{ $pais->pais }}
                         </option>
                     @endforeach
                 </select>
             </div>
             <div class="col-sm-6 col-lg-6">
                 <select class="form-select form-select-lg mb-3" aria-label="Small select example" id="cod_departamento"
                     name="cod_departamento" required>
                     @foreach ($departamentos as $departamento)
                         <option value="{{ $cliente->cod_departamento }}"
                             {{ $cliente->cod_departamento == $departamento->cod_departamento ? 'selected' : '' }}>
                             {{ $departamento->departamento }}
                         </option>
                     @endforeach
                 </select>
             </div>
             <div class="col-sm-6 col-lg-6 mb-3">
                 <select class="form-select form-select-lg mb-3" aria-label="Small select example" id="cod_municipio"
                     name="cod_municipio" required>
                     @foreach ($municipios as $municipio)
                         <option value="{{ $cliente->cod_municipio }}"
                             {{ $cliente->cod_municipio == $municipio->cod_municipio ? 'selected' : '' }}>
                             {{ $municipio->municipio }}
                         </option>
                     @endforeach
                 </select>
             </div>
         </div>
         <div class="col-12">
             <input type="submit" value="Actualizar" class="btn btn-primary w-100 py-2">
         </div>
     </form>
 @endcomponent
