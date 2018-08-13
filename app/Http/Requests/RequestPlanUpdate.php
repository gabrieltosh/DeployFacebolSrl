<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPlanUpdate extends FormRequest
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
            'precio'=>'required|numeric',
            'plan'=>'required',  
            'moneda'=>'required',
            'nombre-1'=>'required',
            'nombre-2'=>'required',
            'nombre-3'=>'required',
            'nombre-4'=>'required',
            'nombre-5'=>'required',
        ];
    }
}
