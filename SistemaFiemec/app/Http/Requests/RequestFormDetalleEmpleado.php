<?php

namespace SistemaFiemec\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestFormDetalleEmpleado extends FormRequest
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

        'idEmpleado'=>'require',
        'cargo'=>'max:50',
        'sueldo'=>'numeric',
        'fecha_inicio'=>'date',
        'fecha_fin'=>'date',
        
     
            //
        ];
    }
}
