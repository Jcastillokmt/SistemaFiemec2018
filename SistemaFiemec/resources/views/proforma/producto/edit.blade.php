@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<h3>Modificar Producto: {{ $producto->nombre_producto}}</h3>
	@if (count($errors)>0)
	<div class="alert-alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			    <li>{{$error}}</li>
			@endforeach 
		</ul>	
    </div>
    @endif
</div>
</div>

    {!!Form::model($producto,['method'=>'PATCH','route'=>['producto.update',$producto->idProducto],'files'=>'true'])!!}
    {{Form::token()}}

<div class="form-group">
	<label for="serie_producto">Serie</label>
	<input type="text" name="serie_producto" class="form-control" required value="{{$producto->serie_producto}}">
</div>
<div class="form-group">
	<label for="codigo_pedido">Codigo Pedido</label>
	<input type="text" name="codigo_pedido" class="form-control" required value="{{$producto->codigo_pedido}}">	
</div>
<div class="form-group">
	<label for="codigo_producto">Nombre Producto</label>
	<input type="text" name="codigo_producto" class="form-control" required value="{{$producto->codigo_producto}}">	
</div>
<div class="form-group">
	<label for="nombre_producto">Nombre</label>
	<input type="text" name="nombre_productoe" class="form-control" required value="{{$producto->nombre_producto}}">	
</div>
<div class="form-group">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" class="form-control" required value="{{$producto->nombre}}">	
</div>
<div class="form-group">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" class="form-control" required value="{{$producto->nombre}}">	
</div>
<div class="form-group">
	<label for="stock">Stock</label>
	<input type="text" name="stock" class="form-control" required value="{{$producto->stock}}">	
</div>
<div class="form-group">
	<label for="descripcion">Descripcion</label>
	<input type="text" name="descripcion" class="form-control" required value="{{$producto->descripcion}}">	
</div>


<div class="form-group">
	<label for="categoria">Categoria</label>
	<input type="text" name="categoria" class="form-control" required value="{{$producto->categoria}}">	
</div>

   


<div class="from-group">
	<button class="btn btn-primary" type="submit">guardar</button>
	

</div>
{!!Form::close()!!}

@endsection