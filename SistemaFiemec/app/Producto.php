<?php

namespace SistemaFiemec;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='Producto';
    protected $primarykey='id';
    public $timestamps=false;


    protected $filleable = [
    	'serie_producto',
    	'codigo_pedido',
    	'codigo_producto',
    	'nombre_producto',
    	'marca_producto',
    	'stock',
    	'descripcion_producto',
    	'precio_unitario',
    	'foto',
    	'categoria_producto',
    	'fecha_sistema',
    	'estado', 
   ];

   protected $guarded =[
     
   ];



}
