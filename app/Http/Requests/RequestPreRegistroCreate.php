<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPreRegistroCreate extends FormRequest
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

    /**Ó
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'=>'required',
            'apellido'=>'required',
            'email'=>'required|unique:users|unique:pre_registros',
            'celular'=>'required|max:8|min:5',
            'imagen'=>'image'
        ];
    }
}
