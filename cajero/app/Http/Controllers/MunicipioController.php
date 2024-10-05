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
        $municipio = Municipio::firstOrCreate([
            'municipio' => $request->input('municipio')
        ]);

        if ($municipio->wasRecentlyCreated) {
            // El registro fue creado
            return redirect()->back()->with('success', 'El municipio ha sido creado exitosamente.');
        } else {
            // El registro ya existía
            return redirect()->back()->with('info', 'El municipio ya existe.');
        }
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
        $nuevoNombre = $request->input('municipio');

        // Verificar si ya existe un municipio con el mismo nombre
        $municipioExistente = Municipio::where('municipio', $nuevoNombre)->first();

        if ($municipioExistente && $municipioExistente->cod_municipio != $cod_municipio) {
            // Si existe otro municipio con el mismo nombre, devolver un error
            return redirect()->back()->with('info', 'El nombre del municipio ya existe.');
        }

        // Actualizar el registro existente
        $municipio->municipio = $nuevoNombre;
        $municipio->save();

        return redirect()->back()->with('success', 'El municipio ha sido actualizado exitosamente.');
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
