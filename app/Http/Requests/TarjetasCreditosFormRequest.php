<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TarjetasCreditosFormRequest extends FormRequest
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
            'cod_socio'=>'numeric',
            'nombre'=>'max:100',
            'no_tc'=>'numeric',
            'fecha_emision'=>'required',
            'monto'=>'numeric',
            'saldo'=>'numeric',
        ];
    }
}
