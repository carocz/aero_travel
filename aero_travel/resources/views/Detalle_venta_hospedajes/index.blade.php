@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle venta hospedajes</h1>
<a href="detalle_venta_hospedaje/create">Crear un nuevo detalle</a>
<table>
	<tr>
		<th>ID</th>
		<th>Venta</th>
		<th>Hospedaje</th>
		<th>Cantidad</th>
		<th>Precio compra</th>
		<th>Precio venta</th>
		<th>Status</th>
	</tr> 
	@foreach($detalle_venta_hospedaje as $detalle_venta_hospedaje)
	<tr>
		<td>{!! $detalle_venta_hospedaje->id !!}</td>
		<td>{!! $detalle_venta_hospedaje->id_venta !!}</td>
		<td>{!! $detalle_venta_hospedaje->id_hospedaje !!}</td>
		<td>{!! $detalle_venta_hospedaje->cantidad !!}</td>
		<td>{!! $detalle_venta_hospedaje->precio_compra !!}</td>
		<td>{!! $detalle_venta_hospedaje->precio_venta !!}</td>
		<td>{!! $detalle_venta_hospedaje->status !!}</td>
		<td>			
			<a href="{!! 'detalle_venta_hospedaje/'.$detalle_venta_hospedaje->id !!}">Detalle</a>
			<a href="{!! 'detalle_venta_hospedaje/'.$detalle_venta_hospedaje->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/detalle_venta_hospedaje/'.$detalle_venta_hospedaje->id]) !!}
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