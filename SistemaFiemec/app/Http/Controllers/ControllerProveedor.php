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

class ControllerProveedor extends Controller
{
   public function __construct()
    {

    }
    public function index(Request $request)
    {
    if($request)
    {
       $query=trim($request->get('searchText'));
       $proveedores=DB::table('Cliente_Proveedor as cp')
       ->join('Cliente_direccion as cd','cp.idCliente','=','cd.idCliente')

       ->select('cp.idCliente','cp.tipo_documento','cp.nro_documento','cp.nombres_Rs','cp.telefono','cp.celular','cp.correo','cp.cuenta_1','cp.cuenta_2','cp.cuenta_3','cd.provincia','cd.distrito','cd.direcion','cp.estado')

              ->where('cp.nro_documento','LIKE','%'.$query.'%')
             ->where('cp.nombres_Rs','LIKE','%'.$query.'%')
       ->where('cp.tipo_persona','=','proveedor')

       ->orderby('cp.idCliente','asc')
       ->groupBy('cp.idCliente','cp.tipo_documento','cp.nro_documento','cp.nombres_Rs','cp.telefono','cp.celular','cp.correo','cp.cuenta_1','cp.cuenta_2','cp.cuenta_3','cd.provincia','cd.distrito','cd.direcion','cp.estado')

       ->paginate(10);

       return view('proforma.proveedor.index',["proveedores"=>$proveedores,"searchText"=>$query]);
    }

}

}
