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
        // Cargar clientes con sus departamentos
        // $clientes = Cliente::with('departamento');
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
    public function create(ClienteFormRequest $request)
    {
        /* $validatedData = $request->validate([
            'primer_nombre' => 'required|string|max:255',
            'segundo_nombre' => 'nullable|string|max:255',
            'primer_apellido' => 'required|string|max:255',
            'segundo_apellido' => 'nullable|string|max:255',
            'dui' => 'required|string|max:10',
            'fecha_de_nacimiento' => 'required|date',
            'celular' => 'required|string|max:15',
            'correo' => 'required|email|max:255',
            'cod_pais' => 'required|integer',
            'cod_departamento' => 'required|integer',
            'cod_municipio' => 'required|integer',
        ]);*/

        Cliente::create($request);

        return redirect()->route('cliente.index')->with('success', 'Cliente creado exitosamente.');
        //return view('cliente.create', compact('departamentos', 'municipios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
