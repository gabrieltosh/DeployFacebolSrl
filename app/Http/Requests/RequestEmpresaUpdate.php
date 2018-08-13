<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RequestEmpresaUpdate extends FormRequest
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
            'nombre'=>'required',
            'descripcion'=>'required',
            'telefono'=>'required',
            'email'=>'required',
            'facebook'=>'required',
            'promocion'=>'required',
            'descuento'=>'required',
            'direccion'=>'required',
            'horario'=>'required',
            'video'=>'required'
        ];
    }
}
