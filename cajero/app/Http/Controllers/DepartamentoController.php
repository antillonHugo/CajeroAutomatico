<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;
use App\Http\Requests\DepartamentoFormRequest;

class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //función que me permitira filtrar la información
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
        //
        Departamento::create([
            'departamento' => $request->input('departamento')
        ]);

        return redirect()->route('departamento.index')->with('success', 'El país se ha creado con éxito.');
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
        // Encuentra el registro existente por su ID
        $departamento = Departamento::findOrFail($cod_departamento);

        // Obtener los datos validados
        $departamento->departamento = $request->input('departamento');

        // Actualizar el departamento con los datos validados
        $departamento->update();

        // Redirige con un mensaje de éxito
        return redirect()->route('departamento.index')->with('success', 'Departamento actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cod_departamento)
    {
        $departamento = Departamento::findOrFail($cod_departamento);

        // Verificamos si el departamento existe
        if (!$departamento) {
            return redirect()->route('departamento.index')->withErrors('Departamento no encontrado.');
        }

        $departamento->delete();
        // Retornar la vista con los datos de los departamentos
        return redirect()->route('departamento.index')->with('success', 'Departamento eliminado exitosamente.');
    }
}
