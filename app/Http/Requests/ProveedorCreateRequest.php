<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class ProveedorCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Nombre'     => 'required|min:3|max:20|unique:proveedors',
            'asesor'     => 'required|min:3|max:20',
            'Correo'     => 'required|email||unique:proveedors',
            'Direccion'  => 'required|min:3|max:30|min:10',
            'Telefono'   => 'required|min:10|max:20|unique:proveedors',
        ];
    }
    public function messages()
    {
        return[
            'Telefono.min' => 'El campo tiene que se minimo 10.',
        ];
    }
    
}