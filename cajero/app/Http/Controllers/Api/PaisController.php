<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pais;

class PaisController extends Controller
{

    //función que me permitira filtrar la información
    public function index(Request $request)
    {
        // Busca registros que contengan el texto proporcionado
        $pais = Pais::where('pais', 'like', '%' . $request->searchText . '%')->orderBy('cod_pais', 'desc')
            ->paginate(2);

        if ($pais->isEmpty()) {
            $message = 'No se encontraron registros';
            return response()->json(['message' => $message, 'status' => 200], 200);
        }

        $arraypais = [
            'pais' => $pais,
            'status' => 200
        ];
        return response()->json($arraypais, 200);
    }
}
