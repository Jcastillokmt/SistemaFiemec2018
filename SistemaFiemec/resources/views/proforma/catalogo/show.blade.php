@extends ('layouts.admin')
@section ('contenido')

<table id="pro" class="table">

				<tfoot>
                      <th ></th>
                        
                 </tfoot>
				@foreach($pro   as $p)

				<tr>
	
				<td><font FACE="impact" SIZE=8 COLOR="black">{{$p->nombre_producto}}</font></td>
					
				</tr>
				@endforeach
				</tbody>
		
			</table>
    	   

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            	<table id="pro" class="table table-striped table-bordered table-condensed table-hover">
            		<thead style="background-color:#3c8dbc">
		
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Id</font></th>
					
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Serie Producto</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Codigo Pedido</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Codigo Producto</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">nombre</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Marca</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Stock</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Descripcion</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Precio</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Foto</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Categoria Producto</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">fecha sistema</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">estado</font></th>


					
				</thead>
            		<tfoot>
            			
            			<th></th>
            			<th></th>
            			

            		</tfoot>
            		<tbody>
            			@foreach($pro as $dp)
                        <tr>
					<td style="text-align:center;"><h3>{{$dp->idProducto}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->serie_producto}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->codigo_pedido}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->codigo_producto}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->nombre_producto}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->marca_producto></td>
					<td style="text-align:center;"><h3>{{$dp->stock}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->descripcion_producto}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->precio_unitario}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->foto}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->categoria_producto}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->fecha_sistema}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->estado}}</h3></td>
					

						
				</tr>

                        @endforeach

            		</tbody>


            		
            	</table>
            	<font SIZE=4 COLOR="white">---------------------------------------------------------------------------------------------------------------------------------------------------*-------</font><a href="{{url('ventas/producto')}}"><button class="btn btn-success"><font FACE="Arial" SIZE=4 COLOR="white">volver</font></button></a></h3>
            </div>
      </div>
</div>
</div>    
   



@endsection