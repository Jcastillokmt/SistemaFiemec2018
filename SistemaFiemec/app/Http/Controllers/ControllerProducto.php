<?php

namespace SistemaFiemec\Http\Controllers;


use Illuminate\Http\Request;
use SistemaFiemec\Http\Requests;
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
       ->where('estado','=','activo')
       ->orderby('id','asc')
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


public function edit($id)
    {

        return view("proforma.producto.edit",["producto"=>Producto::findOrFail($id)]);
    }
   
  
   
    public function update(RequestFormProducto $request,$id)
    {

        $producto=Producto::find($id);
        $producto->serie_producto=$request->get('serie_producto');
        $producto->codigo_pedido=$request->get('codigo_pedido');
        $producto->codigo_producto=$request->get('codigo_producto');
        $producto->nombre_producto=$request->get('nombre_producto');
        $producto->marca_producto=$request->get('marca_producto');
        $producto->stock=$request->get('stock');
        $producto->descripcion_producto=$request->get('descripcion_producto');
        $producto->precio_unitario=$request->get('precio_unitario');
        $producto->categoria_producto=$request->get('categoria_producto');
        $producto->update();
        return Redirect::to('proforma/producto');
    }

    public function destroy($id)
    {
        $producto=Producto::findOrFail($id);
        $producto->estado='retirado';
        $producto->update();
        return Redirect::to('proforma/producto');


    }
    
 }