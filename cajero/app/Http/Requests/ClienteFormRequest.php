<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'primer_nombre' => 'required|string|max:25',
            'segundo_nombre' => 'string|max:25',
            'primer_apellido' => 'required|string|max:25',
            'segundo_apellido' => 'string|max:25',
            'dui' => 'required|int|max:9|unique:clientes',
            'fecha_de_nacimiento' => 'required|string',
            'celular' => 'required|int|max:9|unique:clientes',
            'correo' => 'required|string|max:50|unique:clientes',
            'cod_pais' => 'required|int|max:9|exists:paises,cod_pais',
            'cod_departamento' => 'required|int|exists:departamentos,cod_departamento',
            'cod_municipio' => 'required|int|exists:municipios,cod_municipio'
        ];
    }
}
