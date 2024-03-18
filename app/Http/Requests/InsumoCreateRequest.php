<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsumoCreateRequest extends FormRequest
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
            'Nombre_Insumo'   => 'required|min:3|max:20||unique:insumos',
            'id_categorias'   => 'required',
            'Stock'           => 'required'
            
        ];

    }
        public function messages()
        {
            return[
                'id_categorias.required' => 'El campo categoria es requerido.',
                
    
            ];
        }

    }
