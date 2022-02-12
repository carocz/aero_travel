@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Asientos por vuelo</h1>
<a href="asientos_por_vuelo/create">Agregar un nuevo asiento</a>
<table>
	<tr>
		<th>ID</th>
		<th>Vuelo</th>
		<th>Detalle</th>
		<th>Status</th>
	</tr> 
	@foreach($asientos_por_vuelo as $asientos_por_vuelo)
	<tr>
		<td>{!! $asientos_por_vuelo->id !!}</td>
		<td>{!! $asientos_por_vuelo->vuelos->id !!}</td>
		<td>{!! $asientos_por_vuelo->detalle !!}</td>
		<td>{!! $asientos_por_vuelo->status !!}</td>
		<td>			
			<a href="{!! 'asientos_por_vuelo/'.$asientos_por_vuelo->id !!}">Detalle</a>
			<a href="{!! 'asientos_por_vuelo/'.$asientos_por_vuelo->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/asientos_por_vuelo/'.$asientos_por_vuelo->id]) !!}
			{!! Form::submit('Eliminar asiento') !!}
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