@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Vuelos</h1>
<a href="vuelos/create">Agregar un vuelo</a>
<table>
	<tr>
		<th>ID</th>
		<th>Aerolinea</th>
		<th>Ciudad de origen</th>
		<th>Ciudad de destino</th>
		<th>Fecha</th>
		<th>Hora salida</th>
		<th>Hora llegada</th>
		<th>Precio Compra</th>
		<th>Precio Venta</th>
		<th>Status</th>
	</tr> 
	@foreach($vuelos as $vuelos)
	<tr>
		<td>{!! $vuelos->id !!}</td>
		<td>{!! $vuelos->aerolineas->nombre !!}</td>
		<td>{!! $vuelos->ciudad_origen->nombre !!}</td>
		<td>{!! $vuelos->ciudad_destino->nombre !!}</td>
		<td>{!! $vuelos->fecha !!}</td>
		<td>{!! $vuelos->hora_salida !!}</td>
		<td>{!! $vuelos->hora_llegada !!}</td>
		<td>{!! $vuelos->precio_compra !!}</td>
		<td>{!! $vuelos->precio_venta !!}</td>
		<td>{!! $vuelos->status !!}</td>
		<td>			
			<a href="{!! 'vuelos/'.$vuelos->id !!}">Detalle</a>
			<a href="{!! 'vuelos/'.$vuelos->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/vuelos/'.$vuelos->id]) !!}
			{!! Form::submit('Eliminar vuelo') !!}
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
        @include('template.footer')