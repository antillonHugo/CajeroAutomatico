<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Http\Requests\ClienteFormRequest;
use App\Filters\ClienteFilter;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        $clientes = Cliente::query();

        $filter = new ClienteFilter($request);

        $clientes = $filter->apply($clientes);

        $resultados = $clientes->paginate(10);

        if ($resultados->isEmpty()) {
            $message = 'No se encontraron registros';
            return response()->json(['message' => $message, 'status' => 200], 200);
        }

        $arrayclientes = [
            'cliente' => $resultados,
            'status' => 200
        ];

        // Retornar los resultados en formato JSON
        return response()->json($arrayclientes, 200);
    }
}
