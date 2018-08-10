<?php

namespace SistemaFiemec\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestFormEmpleados extends FormRequest
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
        'tipo_documento'=>'max:45',
        'nro_documento'=>'numeric|max:11',
        'nombres'=>'max:45',
        'materno'=>'max:45',
        'paterno'=>'max:45',
        'fecha_nacimiento'=>'date',
        'sexo'=>'max:45',
        'telefono'=>'numeric|max:45',
        'celular'=>'numeric|max:45',
        'usuario'=>'max:45',
        'contraseño'=>'max:45',
        'direccion'=>'max:250',

        'correo'=>'max:90',
        'foto'=>'max:105',

        'estado'=>'max:15',
            //
        ];
    }
}
