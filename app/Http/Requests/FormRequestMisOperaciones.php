<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestMisOperaciones extends FormRequest
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
            //
            'inputFecha' => 'required',
            'inputHora' => 'required',
            'inputSesion' => 'required',
            'inputDivisa' => 'required',
            'inputOperacion' => 'required',
            'inputExpiracion' => 'required',
            'inputPeriodoVela' => 'required',
            'inputInversion' => 'required',
            'inputRendimiento' => 'required',
            'inputResultado' => 'required'
        ];
    }
}
