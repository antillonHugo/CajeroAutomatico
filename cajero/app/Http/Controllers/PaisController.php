<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Http\Requests\PaisFormRequest;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Muestra una lista de recursos
     */
    public function index()
    {
        // listamos los registros de 'pais'
        $paises = Pais::all();

        return view('pais.index', compact("paises"));
    }

    /**
     * Muestra el formulario para crear un nuevo registro.
     */
    public function create() {}

    /**
     * Guarda un nuevo registro.
     */
    public function store(PaisFormRequest $request)
    {
        // Aquí puedes acceder a los datos validados
        $validarDatos = $request->validated();

        // Guardar los datos validados en la base de datos
        $respuesta = Pais::create($validarDatos);

        if ($respuesta) {
            $mensaje = 'País registrado exitosamente.';
            $tipo = 'success';
        } else {
            $mensaje = 'No se pudo registrar el país. Inténtalo de nuevo.';
            $tipo = 'danger';
        }

        return redirect()->back()->with(['mensaje' => $mensaje, 'tipo' => $tipo]);
    }

    /**
     * Muestra un registro específico.
     */
    public function show() {}

    /**
     * Muestra el formulario para editar un registro.
     */
    public function edit(Pais $pais)
    {
        //
    }

    /**
     * Actualiza un registro existente.
     */
    public function update(PaisFormRequest $request, $cod_pais)
    {
        $pais = Pais::findOrFail($cod_pais);
        $respuesta = $pais->update($request->validated());

        if ($respuesta) {
            $mensaje = 'El país se actualizó exitosamente.';
            $tipo = 'success';
        } else {
            $mensaje = 'No se pudo actualizar el país. Inténtalo de nuevo.';
            $tipo = 'danger';
        }

        return redirect()->back()->with(['mensaje' => $mensaje, 'tipo' => $tipo]);
    }

    /**
     * Elimina un recurso
     */
    public function destroy($cod_pais)
    {
        $pais = Pais::findOrFail($cod_pais);
        $respuesta = $pais->delete();

        if ($respuesta) {
            $mensaje = 'País eliminado correctamente.';
            $tipo = 'success';
        } else {
            $mensaje = 'No se pudo eliminar el país. Inténtalo de nuevo.';
            $tipo = 'danger';
        }

        return redirect()->back()->with(['mensaje' => $mensaje, 'tipo' => $tipo]);
    }
}
