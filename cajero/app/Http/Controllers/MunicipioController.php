<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;
use App\Http\Requests\MunicipioFormRequest;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $municipios = Municipio::all();

        return view('municipio.index', compact('municipios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MunicipioFormRequest $request)
    {
        Municipio::create([
            'municipio' => $request->input('municipio')
        ]);

        return redirect()->route('municipio.index')->with('success', 'El municipio se ha creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipio $municipio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Municipio $municipio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MunicipioFormRequest $request, $cod_municipio)
    {
        // Encuentra el registro existente por su ID
        $municipio = Municipio::findOrFail($cod_municipio);

        // Obtener los datos validados
        $municipio->municipio = $request->input('municipio');

        // Actualizar el municipio con los datos validados
        $municipio->update();

        // Redirige con un mensaje de éxito
        return redirect()->route('municipio.index')->with('success', 'municipio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cod_municipio)
    {
        $municipio = Municipio::findOrFail($cod_municipio);

        // Verificamos si el municipio existe
        if (!$municipio) {
            return redirect()->route('municipio.index')->withErrors('municipio no encontrado.');
        }

        $municipio->delete();
        // Retornar la vista con los datos de los municipios
        return redirect()->route('municipio.index')->with('success', 'municipio eliminado exitosamente.');
    }
}
