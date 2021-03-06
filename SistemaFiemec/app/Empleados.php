<?php

namespace SistemaFiemec;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
   
    protected $table='Empleado';
    protected $primarykey='idEmpleado';
    public $timestamps=false;


    protected $filleable = [

    	'tipo_documento',
    	'nro_documento',
    	'nombres',
    	'materno',
    	'paterno',
    	'fecha_nacimiento',
    	'sexo',
    	'telefono',
    	'celular',
    	'usuario',
    	'contraseño',
    	'direccion',
    	'correo',
    	'foto',
    	'estado',
     
   ];

   protected $guarded =[
     
   ];


}
