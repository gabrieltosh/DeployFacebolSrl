<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUsuarioUpdate extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellido' => 'required',
            'ci' => 'required|numeric',
            'direccion' => 'required|string|min:10',        
            'email'=>'required|email',
            'imagen'=>'image',
            'celular'=>'required'
        ];
    }
}
