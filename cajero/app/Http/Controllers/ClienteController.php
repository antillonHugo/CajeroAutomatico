<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Cliente;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClienteFormRequest;
use App\Models\Pais;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // Cargar clientes
        $clientes = Cliente::all();

        // Obtener todos los departamentos
        $departamentos = Departamento::all();

        // Obtener todos los municipios
        $municipios = Municipio::all();

        // Obtener todos los paìses
        $paises = Pais::all();

        return view('cliente.index', compact('clientes', 'departamentos', 'municipios', 'paises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(ClienteFormRequest $request) {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClienteFormRequest $request)
    {
        // accedemos a los datos validados
        $validarDatos = $request->validated();

        // Guardar los datos validados en la base de datos
        Cliente::create($validarDatos);

        return redirect()->back()->with('success', 'Cliente registrado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClienteFormRequest $request, $cod_cliente)
    {
        // accedemos a los datos validados
        $validatedData = $request->validated();

        // Pasar los datos validados a la vista
        return view('cliente.index', ['datos' => $validatedData]);

        // Verificar si el cliente existe
        $cliente = Cliente::findOrFail($cod_cliente);

        // Obtener los datos validados
        // $nuevoNombre = $request->input('pais');

        // Verificar si ya existe un país con el mismo nombre
        // $paisExistente = Pais::where('pais', $nuevoNombre)->first();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
