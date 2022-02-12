@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Ciudades</h1>
<a href="ciudades/create">Agregar una ciudad</a>
<table>
	<tr>
		<th>ID</th>
		<th>Estado</th>
		<th>Nombre</th>
		<th>Status</th>
	</tr> 
	@foreach($ciudades as $ciudades)
	<tr>
		<td>{!! $ciudades->id !!}</td>
		<td>{!! $ciudades->estados->nombre !!}</td>
		<td>{!! $ciudades->nombre !!}</td>
		<td>{!! $ciudades->status !!}</td>
		<td>			
			<a href="{!! 'ciudades/'.$ciudades->id !!}">Detalle</a>
			<a href="{!! 'ciudades/'.$ciudades->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/ciudades/'.$ciudades->id]) !!}
			{!! Form::submit('Eliminar ciudad') !!}
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