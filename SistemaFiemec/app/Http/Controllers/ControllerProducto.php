<?php

namespace SistemaFiemec\Http\Controllers;

use Illuminate\Http\Request;
use SistemaFiemec\Producto;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use SistemaFiemec\Http\Requests\RequestFormProducto;
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

    
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
