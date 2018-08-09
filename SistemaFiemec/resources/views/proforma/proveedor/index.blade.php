@extends ('layouts.admin')
@section ('contenido')
<div class='col-lg-8 col-sm-8 col-xs-12'>
	<h3> Control de Proveedor</h3>
	
	@include('proforma.proveedor.search')
</div>
<div class='row'>
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
		<div class="table-responsive">
			<table class=" table table-striped table-bordered table-condensed table-hover">
				<thead>
					
					
					<th>Tipo Documento</th>
					<th>Nro Documento</th>
					<th>Nombres</th>					
                   <th>Telefono</th>
					 <th>Celular</th>
					  <th>Correo</th>
	             

					  <th>Direccion</th>
	                

	                
	                  <th>Estado</th>




					
				</thead>

	
				@foreach ($proveedores as $pro)
				
				<tr>

					
					
					<td>{{$pro->tipo_documento}}</td>
					<td>{{$pro->nro_documento}}</td>
					<td>{{$pro->nombres_Rs}}</td>
					<td>{{$pro->telefono}}</td>
					<td>{{$pro->celular}}</td>
					<td>{{$pro->correo}}</td>
				
					<td>{{$pro->direcion}}</td>
					<td>{{$pro->estado}}</td>
					
				</tr>
				
             @endforeach
			</table>
		</div>
		{{$proveedores->render()}}
	</div>
</div>

@endsection

<!-- COMENTARIOS
-Codigo de pedido ira en el detalle catalogo
-Foto ira en el detalle catalogo
-fecha de sistema de registro ira en el detalle catalogo 



-la cuentas iran en le DETALLE DEL PROVEEDOR 

-->