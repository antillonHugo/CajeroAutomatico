<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentosController extends Controller
{
    //función que me permitira filtrar la información
    public function index(Request $request)
    {
        // Busca registros que contengan el texto proporcionado
        $departamentos = Departamento::orderBy('cod_departamento', 'desc')->where('departamento', 'like', '%' . $request->searchText . '%')->paginate(3);

        if ($departamentos->isEmpty()) {
            $message = 'No se encontraron registros';
            return response()->json(['message' => $message, 'status' => 200], 200);
        }

        $arraydepartamentos = [
            'departamento' => $departamentos,
            'status' => 200
        ];
        return response()->json($arraydepartamentos, 200);
    }
}
