<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class ClienteFilter
{
    protected $request;

    // Constructor que recibe el objeto Request
    public function __construct($request)
    {
        $this->request = $request;
    }

    // Método que aplica los filtros a la consulta
    public function apply(Builder $builder)
    {
        // $codDepartamento = $this->request->input('departamentoid');

        // Filtro por nombre
        if ($nombre = $this->request->input('nombre')) {
            $builder->where(function ($query) use ($nombre) {
                $query->where('primer_nombre', 'like', "%{$nombre}%")
                    ->orWhere('segundo_nombre', 'like', "%{$nombre}%")
                    ->orWhere('primer_apellido', 'like', "%{$nombre}%")
                    ->orWhere('segundo_apellido', 'like', "%{$nombre}%");
            });
        }

        // Filtro por DUI
        if ($dui = $this->request->input('dui')) {
            $builder->where('dui', 'like', "%{$dui}%");
        }

        //Filtro por departamento
        if ($codDepartamento = $this->request->input('departamentoid')) {
            $builder->where('cod_departamento', $codDepartamento);
        }

        //Filtro por municipio
        if ($codMunicipio = $this->request->input('municipioid')) {
            $builder->where('cod_municipio', $codMunicipio);
        }

        return $builder;
    }
}
