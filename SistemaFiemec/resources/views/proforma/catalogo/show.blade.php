@extends ('layouts.admin')
@section ('contenido')

<table id="pro" class="table">

				<tfoot>
                      <th ></th>
                        
                 </tfoot>
				@foreach($catalogo as $dp)

				<tr>
	
					<td><font FACE="impact" SIZE=8 COLOR="black">{{$dp->nombre}}</font></td>
					
				</tr>
				@endforeach
				</tbody>
		
			</table>
    	   

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            	<table id="catalogo" class="table table-striped table-bordered table-condensed table-hover">
            		<thead style="background-color:#3c8dbc">
		
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Id</font></th>

					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Codigo</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Nombre</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Marca</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Stock</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Descripcion</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">categoria</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Precio</font></th>
					
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">estado</font></th>

					
				</thead>
            		<tfoot>
            			
            			<th></th>
            			<th></th>
            			

            		</tfoot>
            		<tbody>
            			@foreach($catalogo as $dp)
                        <tr>
					<td style="text-align:center;"><h3>{{$dp->idProducto}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->codarticulo}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->nombre}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->marca}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->stock}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->descripcion}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->categoria}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->precio_unitario}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->estado}}</h3></td>
					

						
				</tr>

                        @endforeach

            		</tbody>


            		
            	</table>
            	<font SIZE=4 COLOR="white">---------------------------------------------------------------------------------------------------------------------------------------------------*-------</font><a href="{{url('ventas/catalogo')}}"><button class="btn btn-success"><font FACE="Arial" SIZE=4 COLOR="white">volver</font></button></a></h3>
            	
     
   
   



@endsection