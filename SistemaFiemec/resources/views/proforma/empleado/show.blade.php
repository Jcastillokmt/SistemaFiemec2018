@extends ('layouts.admin')
@section ('contenido')

<table id="pro" class="table">

				<tfoot>
                      <th ></th>
                        
                 </tfoot>
				@foreach($empleado as $emp)

				<tr>
	
				<td><font FACE="impact" SIZE=8 COLOR="black">{{$emp->nombres}}</font></td>
					
				</tr>
				@endforeach
				</tbody>
		
			</table>
    	   

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            	<table id="pro" class="table table-striped table-bordered table-condensed table-hover">
            		<thead style="background-color:#3c8dbc">
		
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Id</font></th>

					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Tipo documento</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">numero documento</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Nombres</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Materno</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Paterno</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Fecha Nacimiento</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Sexo</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Telefono</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Celular</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Usuario</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Contraseña</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Direcccion</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Correo</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Foto</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Estado</font></th>
					
				</thead>
            		<tfoot>
            			
            			<th></th>
            			<th></th>
            			

            		</tfoot>
            		<tbody>
            			@foreach($empleado as $dp)
                        <tr>
					<td style="text-align:center;"><h3>{{$dp->idEmpleado}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->tipo_documento}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->nro_documento}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->nombres}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->materno}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->paterno}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->fecha_nacimiento}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->sexo}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->telefono}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->celular}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->usuario}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->contraseña}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->direccion}}</h3></td>

					<td style="text-align:center;"><h3>{{$dp->correo}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->foto}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->estado}}</h3></td>


				</tr>

                        @endforeach

            		</tbody>


            		
            	</table>
            	
            </div>
      </div>
</div>
</div>    
   



@endsection