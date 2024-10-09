<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaisFormRequest extends FormRequest
{
    /**
     * esta es una clase para solicitud (Request) personalizada. Estas 
     * clases se utilizan principalmente para encapsular la lógica de 
     * validación y autorización de las solicitudes HTTP
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Aquí puedes definir la lógica de autorización mediante el true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $cod_pais = $this->route('cod_pais'); // Obtener el ID del registro actual desde la ruta

        return [
            'pais' => 'required|string|max:50|unique:paises,pais,' . $cod_pais . ',cod_pais',
        ];
    }

    // Agregamos los mensajes personalizados
    public function messages()
    {
        return [
            'pais.required' => 'El pais es obligatorio.',
            'pais.max' => 'El nombre del país no debe exceder los 50 caracteres.',
            'pais.unique' => 'El país ya está registrado en la base de datos.',
        ];
    }
}
