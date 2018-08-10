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
       $clientes=DB::table('Cliente_Proveedor as cp')
       ->join('Cliente_direccion as cd','cp.idCliente','=','cd.idCliente')

       ->select('cp.tipo_documento','cp.nro_documento','cp.nombres_Rs','cp.telefono','cp.celular','cp.correo','cp.cuenta_1','cp.cuenta_2','cp.cuenta_3','cd.provincia','cd.distrito','cd.direcion','cp.estado')

       ->groupBy('cp.tipo_documento','cp.nro_documento','cp.nombres_Rs','cp.telefono','cp.celular','cp.correo','cp.cuenta_1','cp.cuenta_2','cp.cuenta_3','cd.provincia','cd.distrito','cd.direcion','cp.estado')

       ->where('nro_documento','LIKE','%'.$query.'%')
       ->orwhere('nombres_Rs','LIKE','%'.$query.'%')
       ->orwhere('tipo_documento','LIKE','%'.$query.'%')
       ->where('tipo_persona','=','cliente')
       ->orderby('idCliente','asc')
       ->paginate(10);

       return view('proforma.cliente.index',["clientes"=>$clientes,"searchText"=>$query]);


    }

     
}
}
