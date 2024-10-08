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
            'dui' => 'required|size:10|unique:clientes,dui',
            'fecha_de_nacimiento' => 'required|date',
            'celular' => 'required|size:9|unique:clientes',
            'correo' => 'required|max:50|email|unique:clientes,correo',
            'cod_pais' => 'required|int|exists:paises,cod_pais',
            'cod_departamento' => 'required|int|exists:departamentos,cod_departamento',
            'cod_municipio' => 'required|int|exists:municipios,cod_municipio'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'primer_apellido.required' => 'El campo primer apellido es obligatorio.',
            'dui.required' => 'El campo DUI es obligatorio.',
            'dui.unique' => 'El DUI ya está registrado.',
            'fecha_de_nacimiento.required' => 'El campo Fecha de Nacimiento es obligatorio.',
            'celular.required' => 'El campo celular es obligatorio.',
            'celular.unique' => 'El celular ya está registrado.',
            'correo.required' => 'El campo correo es obligatorio.',
            'correo.unique' => 'El correo ya está registrado.',
            'cod_pais.required' => 'El campo país es obligatorio.',
            'cod_pais.exists' => 'El país no es válido.',
            'cod_departamento.required' => 'El campo departamento es obligatorio.',
            'cod_departamento.exists' => 'El departamento no es válido.',
            'cod_municipio.required' => 'El campo municipio es obligatorio.',
            'cod_municipio.exists' => 'El municipio no es válido.',
        ];
    }
}
