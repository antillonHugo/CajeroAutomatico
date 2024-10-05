<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
        // 
        return [
            'departamento' => 'required|string|max:50'
        ];
    }

    // Agregamos los mensajes personalizados
    public function messages()
    {
        return [
            'departamento.required' => 'El departamento es obligatorio.',
            'departamento.max' => 'El nombre del departamento no debe exceder los 50 caracteres.'
        ];
    }
}
