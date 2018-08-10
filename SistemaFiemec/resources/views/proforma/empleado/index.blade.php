@extends ('layouts.admin')
@section ('contenido')
<div class='col-lg-8 col-sm-8 col-xs-12'>
	<h3> Control de Trabajadores</h3>
	
	@include('proforma.empleado.search')
</div>
<div class='row'>
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
		<div class="table-responsive">
			<table class=" table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					
					<th>Tipo Documento</th>
					<th>Nro Documento</th>
					<th>Nombres</th>
					<th>Paterno</th>
                    <th>Materno</th>
                    <th>Cargo</th>

                    <th>Telefono</th>
					 <th>Celular</th>
					  <th>Correo</th>
	                
	                  <th>Estado</th>




					
				</thead>

	
				@foreach ($empleados as $empl)
				
				<tr>

					
					
					<td>{{$empl->tipo_documento}}</td>
					<td>{{$empl->nro_documento}}</td>
					<td>{{$empl->nombres}}</td>
					<td>{{$empl->materno}}</td>
					<td>{{$empl->paterno}}</td>
					<td>{{$empl->cargo}}</td>
					<td>{{$empl->telefono}}</td>
					<td>{{$empl->celular}}</td>
					<td>{{$empl->correo}}</td>
					<td>{{$empl->estado}}</td>
					
					

						<td>
					<a href="{{URL::action('ControllerEmpleados@show',$empl->idEmpleado)}}"><button class="btn btn-input">ver</button>
					</a>
					</td>
					

				</tr>
				
             @endforeach
			</table>
		</div>
		{{$empleados->render()}}
	</div>
</div>

@endsection

<!-- COMENTARIOS
-Codigo de pedido ira en el detalle catalogo
-Foto ira en el detalle catalogo
-fecha de sistema de registro ira en el detalle catalogo  -->