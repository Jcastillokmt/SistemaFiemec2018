<?php

namespace SistemaFiemec\Http\Controllers;


use Illuminate\Http\Request;
use SistemaFiemec\Producto;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use SistemaFiemec\Http\Requests\RequestFormProducto;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;
use DB;

class ControllerProducto extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    if($request)
    {
       $query=trim($request->get('searchText'));
       $productos=DB::table('Producto')
       ->where('serie_producto','LIKE','%'.$query.'%')
       ->orwhere('codigo_producto','LIKE','%'.$query.'%')
       ->orwhere('marca_producto','LIKE','%'.$query.'%')
       ->where('estado','=','activo')
       ->orderby('idProducto','asc')
       ->paginate(20);

       return view('proforma.producto.index',["productos"=>$productos,"searchText"=>$query]);
    }
}
    
    public function create()
    {

     
      return view('proforma.producto.create');
 

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
    
        $detalleproducto=DB::table('producto')
        ->where('idProducto','=',$id)
        ->get();
        return view('proforma.catalogo.show',["detalleproducto"=>$detalleproducto]);
    
   
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