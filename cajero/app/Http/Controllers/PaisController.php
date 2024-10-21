<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Http\Requests\PaisFormRequest;
use Illuminate\Foundation\Http\FormRequest;

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
        // accedemos a los datos validados
        $validarDatos = $request->validated();

        // Guardar los datos validados en la base de datos
        $pais = Pais::create($validarDatos);

        if ($pais) {
            // El registro fue creado
            return redirect()->back()->with('success', 'El país ha sido creado exitosamente.');
        }

        // Si la creación falla, redirige con un mensaje de error
        return redirect()->back()->with('error', 'No se pudo crear el país');
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
        // Encuentra el país por su ID
        $pais = Pais::findOrFail($cod_pais);

        // Intenta actualizar el país con los datos validados
        $actualizacion = $pais->update($request->validated());

        // Verifica si la actualización fue exitosa
        if ($actualizacion) {
            return redirect()->back()->with('success', 'País actualizado correctamente');
        }

        // Si la actualización falla, redirige con un mensaje de error
        return redirect()->back()->with('error', 'No se pudo actualizar el país');
    }

    /**
     * Elimina un recurso
     */
    public function destroy($cod_pais)
    {
        // Encuentra el país por su ID
        $pais = Pais::find($cod_pais);

        // Si el país existe, elimínalo
        if ($pais) {
            $pais->delete();
            return redirect()->back()->with('success', 'País eliminado con éxito');
        }

        // Si el país no existe, devuelve un error
        return redirect()->back()->with('error', 'País no encontrado');
    }
}
