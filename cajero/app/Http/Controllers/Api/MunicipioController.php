<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    //función que me permitira filtrar la información
    public function index(Request $request)
    {
        // Busca registros que contengan el texto proporcionado
        $municipio = Municipio::orderBy('cod_municipio', 'desc')->where('municipio', 'like', '%' . $request->searchText . '%')->paginate(2);

        if ($municipio->isEmpty()) {
            $message = 'No se encontraron registros';
            return response()->json(['message' => $message, 'status' => 200], 200);
        }

        $arraymunicipio = [
            'municipio' => $municipio,
            'status' => 200
        ];
        return response()->json($arraymunicipio, 200);
    }
}
