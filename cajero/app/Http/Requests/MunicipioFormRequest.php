<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MunicipioFormRequest extends FormRequest
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
        $cod_municipio = $this->route('municipio'); // Obtiene el ID del municipio desde la ruta
   
        return [
            'municipio' => [
                'required',
                'string',
                'max:30',
                Rule::unique('municipios', 'municipio')->ignore($cod_municipio, 'cod_municipio'),
            ],
        ];
    }

    // Agregamos los mensajes personalizados
    public function messages()
    {
        return [
            'municipio.required' => 'El municipio es obligatorio.',
            'municipio.max' => 'El nombre del municipio no debe exceder los 30 caracteres.'
        ];
    }
}
