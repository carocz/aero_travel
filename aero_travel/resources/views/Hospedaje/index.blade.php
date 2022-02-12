@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Hospedajes</h1>
<a href="hospedajes/create">Crear un nuevo hospedaje</a>
<table>
	<tr>
		<th>ID</th>
		<th>Hotel</th>
		<th>Ciudad</th>
		<th>Fecha de llegada</th>
		<th>Fecha de salida</th>
		<th>Todo incluido</th>
		<th>Precio  compra</th>
		<th>Precio venta</th>
		<th>Capacidad</th>
		<th>Descripcion</th>
		<th>Status</th>
	</tr> 
	@foreach($hospedajes as $hospedajes)
	<tr>
		<td>{!! $hospedajes->id !!}</td>
		<td>{!! $hospedajes->hotel->nombre !!}</td>
		<td>{!! $hospedajes->ciudades->nombre !!}</td>
		<td>{!! $hospedajes->fecha_llegada !!}</td>
		<td>{!! $hospedajes->fecha_salida !!}</td>
		<td>{!! $hospedajes->todo_incluido_status !!}</td>
		<td>{!! $hospedajes->precio_compra !!}</td>
		<td>{!! $hospedajes->precio_venta !!}</td>
		<td>{!! $hospedajes->capacidad !!}</td>
		<td>{!! $hospedajes->descripcion !!}</td>
		<td>{!! $hospedajes->status !!}</td>
		<td>			
			<a href="{!! 'hospedajes/'.$hospedajes->id !!}">Detalle</a>
			<a href="{!! 'hospedajes/'.$hospedajes->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/bancos/'.$hospedajes->id]) !!}
			{!! Form::submit('Eliminar hospedaje') !!}
			{!! Form::close() !!}
		</td>
	</tr>
	</tr>
	@endforeach
</table>
<br />
<a href="{!! asset('/') !!}">Regresar al menú</a>
                    </div>
                </div>
            </section>

        @include('template.pie')