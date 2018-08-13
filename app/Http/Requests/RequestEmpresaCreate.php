<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RequestEmpresaCreate extends FormRequest
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
            'usuario_id'=>'required|numeric',
            'nombre'=>'required',
            'telefono'=>'required',
            'ciudad_id'=>'required|numeric',
            'categoria_id'=>'required',
            'descripcion'=>'required|string',
            'email'=>'required|email',
            'facebook'=>'required',
            'promocion'=>'required',
            'descuento'=>'required',
            'direccion'=>'required',
            'horario'=>'required',
            'imagen'=>'required|image',
            'video'=>'required',
            'web'=>'required'
        ];
    }
}
