<?php

namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class PaisController extends Controller
{
    /**
     * Muestra una lista de recursos.uuu
     */
    public function index(){ 
       $pais = Pais::all();

        return view('paises.index',compact('pais'));
    }

    /**
     * Muestra el formulario para crear un nuevo recurso.
     */
    public function create()
    {
        //uuuu
    }

    /**
     * Almacena un nuevo recurso.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Muestra un recurso específico.
     */
    public function show($cod_pais)
    {
        //
        $pais = Pais::find($cod_pais);

        return view();
    }

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
    public function update(Request $request, Pais $pais)
    {
        //
    }

    /**
     * Elimina un recurso.uuuuuu
     */
    public function destroy(Pais $pais)
    {
        //
    }
}
