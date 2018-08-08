<?php

namespace SistemaFiemec\Http\Controllers;

use Illuminate\Http\Request;
use sisVentas\Producto;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use sisVentas\Http\Requests\RequestFormProducto;
use DB;

class ControllerCatalogo extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
    if($request)
    {
       $query=trim($request->get('searchtext'));
       $catalogos=DB::table('Producto')
       ->where('serie_producto','LIKE','%'.$query.'%')
       ->where('estado','=','activo')
       ->orderby('idProducto','asc')
       ->paginate(10);

       return view('proforma.catalogo.index',["catalogos"=>$catalogos,"searchText"=>$query]);
    }
}
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
