@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Fotos hoteles</h1>
<a href="fotos_hoteles/create">Agregar una nueva foto</a>
<table>
	<tr>
		<th>ID</th>
		<th>Hotel</th>
		<th>Ruta</th>
		<th>Status</th>
	</tr> 
	@foreach($fotos_hoteles as $fotos_hoteles)
	<tr>
		<td>{!! $fotos_hoteles->id !!}</td>
		<td>{!! $fotos_hoteles->hoteles->nombre !!}</td>
		<td><img src="{!! asset('../storage/fotos_hoteles') !!}/{!! $fotos_hoteles->ruta !!}" width="150px"> </td>
		<td>{!! $fotos_hoteles->status !!}</td>
		<td>			
			<a href="{!! 'fotos_hoteles/'.$fotos_hoteles->id !!}">Detalle</a>
			<a href="{!! 'fotos_hoteles/'.$fotos_hoteles->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/fotos_hoteles/'.$fotos_hoteles->id]) !!}
			{!! Form::submit('Eliminar Foto') !!}
			{!! Form::close() !!}
		</td>
	</tr>
	@endforeach
</table>
<br />
<a href="{!! asset('/') !!}">Regresar al menú</a>
                    </div>
                </div>
            </section>

        @include('template.pie')