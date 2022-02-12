@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle venta vuelo</h1>
<a href="detalle_venta_vuelos/create">Crear un nuevo detalle</a>
<table>
	<tr>
		<th>ID</th>
		<th>Venta</th>
		<th>Vuelo</th>
		<th>Cantidad</th>
		<th>Precio compra</th>
		<th>Precio venta</th>
		<th>Status</th>
	</tr> 
	@foreach($detalle_venta_vuelos as $detalle_venta_vuelos)
	<tr>
		<td>{!! $detalle_venta_vuelos->id !!}</td>
		<td>{!! $detalle_venta_vuelos->id_venta !!}</td>
		<td>{!! $detalle_venta_vuelos->id_vuelo !!}</td>
		<td>{!! $detalle_venta_vuelos->cantidad !!}</td>
		<td>{!! $detalle_venta_vuelos->precio_compra !!}</td>
		<td>{!! $detalle_venta_vuelos->precio_venta !!}</td>
		<td>{!! $detalle_venta_vuelos->status !!}</td>
		<td>			
			<a href="{!! 'detalle_venta_vuelos/'.$detalle_venta_vuelos->id !!}">Detalle</a>
			<a href="{!! 'detalle_venta_vuelos/'.$detalle_venta_vuelos->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/detalle_venta_vuelos/'.$detalle_venta_vuelos->id]) !!}
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