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
        //firstOrCreate es equivalente a create 
        $departamento = Departamento::firstOrCreate([
            'departamento' => $request->input('departamento')
        ]);

        if ($departamento->wasRecentlyCreated) {
            // El registro fue creado
            return redirect()->back()->with('success', 'El departamento ha sido creado exitosamente.');
        } else {
            // El registro ya existía
            return redirect()->back()->with('info', 'El departamento ya existe.');
        }
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
        $nuevoDepartamento = $request->input('departamento');

        // Verificar si ya existe un departamento con el mismo nombre
        $departamentoExistente = Departamento::where('departamento', $nuevoDepartamento)->first();

        if ($departamentoExistente && $departamentoExistente->cod_departamento != $cod_departamento) {
            // Si existe otro departamento con el mismo nombre, devolver un error
            return redirect()->back()->with('info', 'El nombre del departamento ya existe.');
        }

        // Actualizar el registro existente
        $departamento->departamento = $nuevoDepartamento;
        $departamento->save();

        // Redirige con un mensaje de éxito
        return redirect()->back()->with('success', 'El departamento ha sido actualizado exitosamente.');
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
