<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Http\Requests\PaisFormRequest;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Muestra una lista de recursos.uuu
     */
    public function index()
    {
        // listamos los registros de 'pais'
        $paises = Pais::all();

        return view('pais.index', compact('paises'));
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
        //$pais = trim($request->input('pais'));

        Pais::create([
            'pais' => $request->input('pais')
        ]);

        return redirect()->route('pais.index')->with('success', 'El país se ha creado con éxito.');
    }

    /**
     * Muestra un recurso específico.
     */
    public function show() {}
    /*public function show($cod_pais)
    {
        $pais = Pais::find($cod_pais);

        // Verificamos si el país existe
        if ($pais) {
            // Retornar la vista con los datos del país
            return view('paises.show', compact('pais'));
        }

        return redirect()->route('paises.index')->withErrors('País no encontrado.');
    }*/

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

        // Encuentra el registro existente por su ID
        $pais = Pais::findOrFail($cod_pais);

        // Obtener los datos validados
        $pais->pais = $request->input('pais');

        // Actualizar el país con los datos validados
        $pais->update();

        // Redirige con un mensaje de éxito
        return redirect()->route('pais.index')->with('success', 'País actualizado exitosamente.');
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
