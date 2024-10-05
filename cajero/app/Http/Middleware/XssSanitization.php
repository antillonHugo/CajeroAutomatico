<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class XssSanitization
{
    /**
     *objetivo es limpiar y preparar los datos para su procesamiento posterior
     */
    public function handle(Request $request, Closure $next): Response
    {
        //
        $input = $request->all();

        array_walk_recursive($input, function (&$input) {
            // Permitimos letras con acentos, ñ y eliminamos otros caracteres especiales
            $input = preg_replace('/[^A-Za-z0-9áéíóúÁÉÍÓÚñÑ\- ]/', '', $input);
            // Eliminamos los espacios en blanco
            $input = trim($input);
        });


        $request->merge($input);

        return $next($request);
    }
}
