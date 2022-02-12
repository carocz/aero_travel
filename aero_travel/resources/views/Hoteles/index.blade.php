@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Hoteles</h1>
<a href="hoteles/create">Agregar un nuevo hotel</a>
<table>
	<tr>
		<th>ID</th>
		<th>Usuario</th>
		<th>RFC</th>
		<th>Nombre</th>
		<th>Razón social</th>
		<th>Ciudad</th>
		<th>Calle</th>
		<th>Colonia</th>
		<th>Codigo postal</th>
		<th>Teléfono</th>
		<th>Status</th>
	</tr> 
	@foreach($hoteles as $hoteles)
	<tr>
		<td>{!! $hoteles->id !!}</td>
		<td>{!! $hoteles->usuario->nombre !!}</td>
		<td>{!! $hoteles->rfc !!}</td>
		<td>{!! $hoteles->nombre !!}</td>
		<td>{!! $hoteles->razon_social !!}</td>
		<td>{!! $hoteles->ciudad->nombre !!}</td>
		<td>{!! $hoteles->direccion !!}</td>
		<td>{!! $hoteles->colonia !!}</td>
		<td>{!! $hoteles->codigo_postal !!}</td>
		<td>{!! $hoteles->telefono !!}</td>
		<td>{!! $hoteles->status !!}</td>
		<td>			
			<a href="{!! 'hoteles/'.$hoteles->id !!}">Detalle</a>
			<a href="{!! 'hoteles/'.$hoteles->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/hoteles/'.$hoteles->id]) !!}
			{!! Form::submit('Eliminar hotel') !!}
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