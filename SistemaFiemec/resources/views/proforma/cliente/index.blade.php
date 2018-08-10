@extends ('layouts.admin')
@section ('contenido')
<div class='col-lg-8 col-sm-8 col-xs-12'>
	<h3> Control de Cliente</h3>
	
	@include('proforma.cliente.search')
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
                   <th>Telefono</th>
					 <th>Celular</th>
					  <th>Correo</th>
	                
                   <th>Cuenta 1</th>
					 <th>Cuenta 2</th>
					  <th>Cuenta 3</th>

					  <th>Direccion</th>
	                

	                
	                  <th>Estado</th>




					
				</thead>

	
				@foreach ($clientes as $cli)
				
				<tr>

					
					
					<td>{{$cli->tipo_documento}}</td>
					<td>{{$cli->nro_documento}}</td>
					<td>{{$cli->nombres_Rs}}</td>
					<td>{{$cli->paterno}}</td>
					<td>{{$cli->materno}}</td>
					<td>{{$cli->telefono}}</td>
					<td>{{$cli->celular}}</td>
					<td>{{$cli->correo}}</td>
					<td>{{$cli->cuenta_1}}</td>
					<td>{{$cli->cuenta_2}}</td>
					<td>{{$cli->cuenta_3}}</td>
					<td>{{$cli->direcion}}</td>
					<td>{{$cli->estado}}</td>



						<td>
					<a href="{{URL::action('ControllerClientes@show',$cli->idCliente)}}"><button class="btn btn-input">ver</button>
					</a>
					</td>
					
				</tr>
				
             @endforeach
			</table>
		</div>
		{{$clientes->render()}}
	</div>
</div>

@endsection

<!-- COMENTARIOS
-Codigo de pedido ira en el detalle catalogo
-Foto ira en el detalle catalogo
-fecha de sistema de registro ira en el detalle catalogo  -->