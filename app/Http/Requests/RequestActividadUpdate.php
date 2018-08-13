<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestActividadUpdate extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'nombre'=>'required',
            'fecha'=>'required',
            'descripcion'=>'required',
            'imagen'=>'image',
        ];
    }
}
