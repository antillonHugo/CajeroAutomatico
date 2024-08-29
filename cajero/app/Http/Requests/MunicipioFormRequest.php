<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        return [
            //
            'municipio' => 'required|string|max:30|unique:municipios'
        ];
    }

    // Agregamos los mensajes personalizados
    public function messages()
    {
        return [
            'municipio.required' => 'El municipio es obligatorio.',
            'municipio.max' => 'El nombre del municipio no debe exceder los 30 caracteres.',
            'municipio.unique' => 'El municipio que intentas registrar ya existe en nuestra base de datos.'
        ];
    }
}
