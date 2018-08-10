<?php

namespace SistemaFiemec;

use Illuminate\Database\Eloquent\Model;

class DetalleEmpleado extends Model
{
    
    protected $table='Detalle_empleado';
    protected $primarykey='idDetalle_empleado';
    public $timestamps=false;


    protected $filleable = [

    	'idEmpleado',
    	'cargo',
    	'sueldo',
    	'fecha_inicio',
    	'fecha_fin',
    	
     
   ];

   protected $guarded =[
     
   ];
}
