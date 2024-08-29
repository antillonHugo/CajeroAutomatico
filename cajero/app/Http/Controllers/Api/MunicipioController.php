<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    //función que me permitira filtrar la información
    public function index(Request $request)
    {
        if ($request->searchText === null) {
            // Realiza la búsqueda en la tabla 'municipios'
            $municipio = Municipio::orderBy('cod_municipio', 'desc')->get();
        } else {
            // Busca registros que contengan el texto proporcionado
            $municipio = Municipio::where('municipio', 'like', '%' . $request->searchText . '%')->get();

            if ($municipio->isEmpty()) {
                $message = 'No se encontraron registros';
                return response()->json(['message' => $message, 'status' => 200], 200);
            }
        }

        $arraymunicipio = [
            'municipio' => $municipio,
            'status' => 200
        ];
        return response()->json($arraymunicipio, 200);
    }
}
