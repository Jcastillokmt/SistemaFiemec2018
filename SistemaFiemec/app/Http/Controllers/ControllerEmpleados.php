<?php

namespace SistemaFiemec\Http\Controllers;


use Illuminate\Http\Request;
use SistemaFiemec\Empleados;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use SistemaFiemec\Http\Requests\RequestFormEmpleados;
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
        ->where('nombres','LIKE','%'.$query.'%')
         ->orwhere('nro_documento','LIKE','%'.$query.'%')
       ->where('estado','=','activo')
       ->orderby('idEmpleado','asc')
       ->paginate(10);

       return view('proforma.empleado.index',["empleados"=>$empleados,"searchText"=>$query]);
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
