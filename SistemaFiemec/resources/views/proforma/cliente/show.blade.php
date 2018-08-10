@extends ('layouts.admin')
@section ('contenido')

<table id="pro" class="table">

				<tfoot>
                      <th ></th>
                        
                 </tfoot>
				@foreach($cliente as $clie)

				<tr>
	
				<td><font FACE="impact" SIZE=8 COLOR="black">{{$cliente->nombres_Rs}}</font></td>
					
				</tr>
				@endforeach
				</tbody>
		
			</table>
    	   

            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
            	<table id="pro" class="table table-striped table-bordered table-condensed table-hover">
            		<thead style="background-color:#3c8dbc">
		
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">ID</font></th>

					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Tipo documento</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">numero documento</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Nombre</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Paterno</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Materno</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Fecha Nacimiento</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Sexo</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Celular</font></th>

						<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Correo</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Foto</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Tipo Persona</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Cuenta 1</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Cuenta 2</font></th>

						<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Cuenta 3</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Fecha Sistema</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Estado</font></th>


						<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Provincia</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Distrito</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Direccion</font></th>
					<th style="text-align:center;"><font FACE="Arial" SIZE=4 COLOR="white">Referencia</font></th>

					
				</thead>
            		<tfoot>
            			
            			<th></th>
            			<th></th>
            			

            		</tfoot>
            		<tbody>
            			@foreach($cliente as $dp)
                        <tr>
					<td style="text-align:center;"><h3>{{$dp->idCliente}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->tipo_documento}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->nro_documento}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->nombres_Rs}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->paterno}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->materno}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->fecha_nacimiento}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->sexo}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->telefono}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->celular}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->correo}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->foto}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->tipo_persona}}</h3></td>

					<td style="text-align:center;"><h3>{{$dp->cuenta_1}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->cuenta_2}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->cuenta_3}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->fecha_sistema}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->estado}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->provincia}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->distrito}}</h3></td>

					<td style="text-align:center;"><h3>{{$dp->direcion}}</h3></td>
					<td style="text-align:center;"><h3>{{$dp->referencia}}</h3></td>
						
				</tr>

                        @endforeach

            		</tbody>


            		
            	</table>
            	
            </div>
      </div>
</div>
</div>    
   



@endsection