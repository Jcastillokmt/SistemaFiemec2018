<?php

namespace SistemaFiemec\Http\Controllers;


use Illuminate\Http\Request;
use SistemaFiemec\Empleados;
use SistemaFiemec\DetalleEmpleado;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use SistemaFiemec\Http\Requests\RequestFormEmpleados;
use SistemaFiemec\Http\Requests\RequestFormDetalleEmpleado;
use DB;

class ControllerEmpleados extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    if($request)
    {
       $query=trim($request->get('searchText'));
       $empleados=DB::table('Empleado as e')
       ->join ('Detalle_empleado as de','e.idEmpleado','=','de.idEmpleado')
       ->select('e.idEmpleado','e.tipo_documento','e.nro_documento','e.nombres','e.materno','e.paterno','e.fecha_nacimiento','e.sexo','e.telefono','e.celular','e.usuario','e.contraseña','e.direccion','e.correo','e.foto','e.estado','de.cargo','de.sueldo','de.fecha_inicio','de.fecha_fin')
        ->where('e.nombres','LIKE','%'.$query.'%')
         ->orwhere('e.nro_documento','LIKE','%'.$query.'%')
       ->where('e.estado','=','activo')
       ->orderby('e.idEmpleado','asc')
       ->paginate(10);

       return view('proforma.empleado.index',["empleados"=>$empleados,"searchText"=>$query]);
    }
}


    public function show($id)
    {

       $empleado=DB::table('Empleado as e')
       ->join ('Detalle_empleado as de','e.idEmpleado','=','de.idEmpleado')
       ->select('e.idEmpleado','e.tipo_documento','e.nro_documento','e.nombres','e.materno','e.paterno','e.fecha_nacimiento','e.sexo','e.telefono','e.celular','e.usuario','e.contraseña','e.direccion','e.correo','e.foto','e.estado','de.cargo','de.sueldo','de.fecha_inicio','de.fecha_fin')      

    ->where('e.idEmpleado','=',$id)
    ->get();
    return view("proforma.empleado.show",["empleado"=>$empleado]);
   
   
    
   
    }
  
 
}
