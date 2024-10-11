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
        // Validar y obtener los datos
        $datosValidados = $request->validated();

        // Intentar crear el municipio
        $municipio = Municipio::create($datosValidados);

        if ($municipio) {
            // El registro fue creado
            return redirect()->back()->with('success', 'El municipio ha sido creado exitosamente.');
        }

        // Si la creación falla, redirige con un mensaje de error
        return redirect()->back()->with('error', 'No se pudo crear el municipio');
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
        // Encuentra el municipio por su ID
        $municipio = Municipio::findOrFail($cod_municipio);

        // Intenta actualizar el municipio con los datos validados
        $actualizacion = $municipio->update($request->validated());

        // Verifica si la actualización fue exitosa
        if ($actualizacion) {
            return redirect()->back()->with('success', 'Municipio actualizado correctamente');
        }

        // Si la actualización falla, redirige con un mensaje de error
        return redirect()->back()->with('error', 'No se pudo actualizar el municipio');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cod_municipio)
    {
        // Encuentra el municipio por su ID
        $municipio = Municipio::find($cod_municipio);

        // Si el municipio existe, elimínalo
        if ($municipio) {
            $municipio->delete();
            return redirect()->back()->with('success', 'Municipio eliminado con éxito');
        }

        // Si el municipio no existe, devuelve un error
        return redirect()->back()->with('error', 'Municipio no encontrado');
    }
}
