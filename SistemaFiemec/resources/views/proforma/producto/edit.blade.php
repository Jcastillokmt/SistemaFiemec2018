@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	<h3>Modificar Producto: {{ $producto->nombre}}</h3>
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
	<label for="codarticulo">Codigo</label>
	<input type="text" name="codarticulo" class="form-control" required value="{{$producto->codarticulo}}">
</div>
<div class="form-group">
	<label for="marca">Marca</label>
	<input type="text" name="marca" class="form-control" required value="{{$producto->marca}}">	
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

<font SIZE=4 COLOR="white">---------------------------------------------------------------------------------------------------------------------------------------------------*--------------</font><a href="{{url('ventas/producto')}}"><button class="btn btn-success"><font FACE="Arial" SIZE=4 COLOR="white">volver</font></button></a></h3>

@endsection