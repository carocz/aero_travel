@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle venta actividades</h1>
<a href="detalle_venta_actividades/create">Crear un nuevo detalle</a>
<table>
	<tr>
		<th>ID</th>
		<th>Venta</th>
		<th>Actividades</th>
		<th>Cantidad</th>
		<th>Precio compra</th>
		<th>Precio venta</th>
		<th>Status</th>
	</tr> 
	@foreach($detalle_venta_actividades as $detalle_venta_actividades)
	<tr>
		<td>{!! $detalle_venta_actividades->id !!}</td>
		<td>{!! $detalle_venta_actividades->id_venta !!}</td>
		<td>{!! $detalle_venta_actividades->id_actividades !!}</td>
		<td>{!! $detalle_venta_actividades->cantidad !!}</td>
		<td>{!! $detalle_venta_actividades->precio_compra !!}</td>
		<td>{!! $detalle_venta_actividades->precio_venta !!}</td>
		<td>{!! $detalle_venta_actividades->status !!}</td>
		<td>			
			<a href="{!! 'detalle_venta_actividades/'.$detalle_venta_actividades->id !!}">Detalle</a>
			<a href="{!! 'detalle_venta_actividades/'.$detalle_venta_actividades->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/detalle_venta_actividades/'.$detalle_venta_actividades->id]) !!}
			{!! Form::submit('Eliminar detalle') !!}
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