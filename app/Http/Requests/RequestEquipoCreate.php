<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestEquipoCreate extends FormRequest
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
            'cargo'=>'required',
            'imagen'=>'required|image',
            'facebook'=>'required|unique:equipos',
            'instagram'=>'unique:equipos',
            'twitter'=>'unique:equipos',
            'descripcion'=>'required',
        ];
    }
}
