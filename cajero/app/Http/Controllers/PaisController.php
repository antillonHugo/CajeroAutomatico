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
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create() {}

    /**
     * Almacena un nuevo recurso.
     */
    public function store(PaisFormRequest $request)
    {
        $pais = Pais::firstOrCreate([
            'pais' => $request->input('pais')
        ]);

        if ($pais->wasRecentlyCreated) {
            // El registro fue creado
            return redirect()->back()->with('success', 'El país ha sido creado exitosamente.');
        } else {
            // El registro ya existía
            return redirect()->back()->with('info', 'El país ya existe.');
        }
    }

    /**
     * Muestra un recurso específico.
     */
    public function show() {}

    /**
     * Muestra el formulario para editar un recurso.
     */
    public function edit(Pais $pais)
    {
        //
    }

    /**
     * Actualiza un recurso existente.
     */
    public function update(PaisFormRequest $request, $cod_pais)
    {
        // Verificar si el registro existe
        $pais = Pais::findOrFail($cod_pais);

        // Obtener los datos validados
        $nuevoNombre = $request->input('pais');

        // Verificar si ya existe un país con el mismo nombre
        $paisExistente = Pais::where('pais', $nuevoNombre)->first();

        if ($paisExistente && $paisExistente->cod_pais != $cod_pais) {
            // Si existe otro país con el mismo nombre, devolver un error
            return redirect()->back()->with('info', 'El nombre del país ya existe.');
        }

        // Actualizar el registro existente
        $pais->pais = $nuevoNombre;
        $pais->save();

        return redirect()->back()->with('success', 'El país ha sido actualizado exitosamente.');
    }

    /**
     * Elimina un recurso
     */
    public function destroy($cod_pais)
    {
        $pais = Pais::findOrFail($cod_pais);

        // Verificamos si el país existe
        if (!$pais) {
            return redirect()->route('pais.index')->withErrors('País no encontrado.');
        }

        $pais->delete();
        // Retornar la vista con los datos del país
        return redirect()->route('pais.index')->with('success', 'País eliminado exitosamente.');
    }
}
