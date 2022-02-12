@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Actividades</h1>
<a href="actividades/create">Crear una nueva actividad</a>
<table>
	<tr>
		<th>ID</th>
		<th>Operador turistico</th>
		<th>Ciudad</th>
		<th>Capacidad</th>
		<th>Descripción</th>
		<th>Todo incluido</th>
		<th>Precio compra</th>
		<th>Precio venta</th>
		<th>Status</th>
	</tr> 
	@foreach($actividades as $actividades)
	<tr>
		<td>{!! $actividades->id !!}</td>
		<td>{!! $actividades->operador_turistico->nombre !!}</td>
		<td>{!! $actividades->ciudades->nombre !!}</td>
		<td>{!! $actividades->capacidad !!}</td>
		<td>{!! $actividades->descripcion !!}</td>
		<td>{!! $actividades->todo_incluido_status !!}</td>
		<td>{!! $actividades->precio_compra !!}</td>
		<td>{!! $actividades->precio_venta !!}</td>
		<td>{!! $actividades->status !!}</td>
		<td>			
			<a href="{!! 'actividades/'.$actividades->id !!}">Detalle</a>
			<a href="{!! 'actividades/'.$actividades->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/actividades/'.$actividades->id]) !!}
			{!! Form::submit('Eliminar actividad') !!}
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