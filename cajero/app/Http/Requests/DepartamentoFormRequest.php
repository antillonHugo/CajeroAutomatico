<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DepartamentoFormRequest extends FormRequest
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
        $cod_departamento = $this->route('departamento'); // Obtiene el ID del departamento desde la ruta

        return [
            'departamento' => [
                'required',
                'string',
                'max:25',
                Rule::unique('departamentos', 'departamento')->ignore($cod_departamento, 'cod_departamento'),
            ]
        ];
    }

    // Agregamos los mensajes personalizados
    public function messages()
    {
        return [
            'departamento.required' => 'El departamento es obligatorio.',
            'departamento.max' => 'El nombre del departamento no debe exceder los 25 caracteres.'
        ];
    }
}
