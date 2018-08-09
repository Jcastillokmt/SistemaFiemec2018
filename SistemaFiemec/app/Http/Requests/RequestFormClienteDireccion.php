<?php

namespace SistemaFiemec\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestFormClienteDireccion extends FormRequest
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


           'idCliente'=>'require',
        'provincia'=>'max:45',
        'distrito'=>'max:45',
        'direcion'=>'max:250',
        'referencia'=>'max:145',
        ];
    }
}
