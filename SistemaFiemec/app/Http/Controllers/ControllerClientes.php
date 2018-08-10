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

     
public function create()
    {
        //
    }
public function store(RequestFormProducto $request)
    {
        $producto=new Producto;
        $producto->serie_producto=$request->get('serie_producto');
        $producto->codigo_pedido=$request->get('codigo_pedido');
        $producto->codigo_producto=$request->get('codigo_producto');
        $producto->nombre_producto=$request->get('nombre_producto');
        $producto->marca_producto=$request->get('marca_producto');
        $producto->stock=$request->get('stock');
        $producto->descripcion_producto=$request->get('descripcion_producto');
        $producto->precio_unitario=$request->get('precio_unitario');
        $producto->categoria_producto=$request->get('categoria_producto');
        $mytime = Carbon::now('America/Lima');
        $producto->fecha_sistema=$mytime->toDateTimeString();
        $producto->estado='activo';
        $producto->save();
        return Redirect::to('proforma/producto');

    }

    public function show($id)
    {
    
    
   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
      @return \Illuminate\Http\Response
     /
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
      @param  int  $id
      @return \Illuminate\Http\Response
     /
    public function update(Request $request, $id)
    {
        //
    }

    /*
      Remove the specified resource from storage.
     
      @param  int  $id
      @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
 }
}

}
