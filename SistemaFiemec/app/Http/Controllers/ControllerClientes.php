<?php

namespace SistemaFiemec\Http\Controllers;


use Illuminate\Http\Request;
use SistemaFiemec\Clientes;
use SistemaFiemec\ClienteDireccion;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use SistemaFiemec\Http\Requests\RequestFormClienteDireccion;
use SistemaFiemec\Http\Requests\RequestFormClientes;

use DB;


class ControllerClientes extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    if($request)
    {
       $query=trim($request->get('searchText'));
       $clientes=DB::table('Cliente_Proveedor as cr')
       ->join('Cliente_direccion as cd','cr.idCliente','=','cd.idCliente')

       ->select('cr.idCliente','cr.tipo_documento','cr.nro_documento','cr.nombres_Rs','cr.paterno','cr.materno','cr.telefono','cr.celular','cr.correo','cr.cuenta_1','cr.cuenta_2','cr.cuenta_3','cd.provincia','cd.distrito','cd.direcion','cr.estado')

       ->groupBy('cr.idCliente','cr.tipo_documento','cr.nro_documento','cr.nombres_Rs','cr.paterno','cr.materno','cr.telefono','cr.celular','cr.correo','cr.cuenta_1','cr.cuenta_2','cr.cuenta_3','cd.provincia','cd.distrito','cd.direcion','cr.estado')

       ->where('cr.nro_documento','LIKE','%'.$query.'%')
       ->orwhere('cr.nombres_Rs','LIKE','%'.$query.'%')
       ->orwhere('cr.tipo_documento','LIKE','%'.$query.'%')
       ->where('cr.tipo_persona','=','cliente')
       ->orderby('cr.idCliente','asc')
       ->paginate(10);

       return view('proforma.cliente.index',["clientes"=>$clientes,"searchText"=>$query]);


    }

}
    public function show($id)
    {
 	$cliente=DB::table('Cliente_Proveedor as cp')
    ->join('Cliente_direccion as cd','cp.idCliente','=','cd.idCliente')
    ->select('cp.idCliente','cp.tipo_documento','cp.nro_documento','cp.nombres_Rs','cp.paterno','cp.materno','cp.fecha_nacimiento','cp.sexo','cp.telefono','cp.celular','cp.correo','cp.foto','cp.tipo_persona','cp.cuenta_1','cp.cuenta_2','cp.cuenta_3','cp.fecha_sistema','cp.estado','cd.provincia','cd.distrito','cd.direcion','cd.referencia')
    ->where('cp.idCliente','=',$id)
    ->get();
		return view("proforma.cliente.show",["cliente"=>$cliente]);
   
   
    }
  
}
