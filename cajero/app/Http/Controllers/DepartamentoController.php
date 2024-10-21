<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Http\Requests\DepartamentoFormRequest;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departamentos = Departamento::all();

        return view("departamento.index", compact("departamentos"));
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
    public function store(DepartamentoFormRequest $request)
    {
        // accedemos a los datos validados
        $validarDatos = $request->validated();

        // Guardar los datos validados en la base de datos
        $departamento = Departamento::create($validarDatos);

        if ($departamento) {
            // El registro fue creado
            return redirect()->back()->with('success', 'El departamento ha sido creado exitosamente.');
        }

        // Si la creación falla, redirige con un mensaje de error
        return redirect()->back()->with('error', 'No se pudo crear el departamento');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departamento $departamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departamento $departamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DepartamentoFormRequest $request, $cod_departamento)
    {
        // Encuentra el departamento por su ID
        $pais = Departamento::findOrFail($cod_departamento);

        // Intenta actualizar el departamento con los datos validados
        $actualizacion = $pais->update($request->validated());

        // Verifica si la actualización fue exitosa
        if ($actualizacion) {
            return redirect()->back()->with('success', 'Departamento actualizado correctamente');
        }

        // Si la actualización falla, redirige con un mensaje de error
        return redirect()->back()->with('error', 'No se pudo actualizar el departamento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cod_departamento)
    {
        // Encuentra el país por su ID
        $departamento = Departamento::find($cod_departamento);

        // Si el país existe, elimínalo
        if ($departamento) {
            $departamento->delete();
            return redirect()->back()->with('success', 'Departamento eliminado con éxito');
        }

        // Si el país no existe, devuelve un error
        return redirect()->back()->with('error', 'País no encontrado');
    }
}
