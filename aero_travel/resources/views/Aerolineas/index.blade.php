@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Aerolineas</h1>
<a href="aerolineas/create">Agregar una aerolinea</a>
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
	@foreach($aerolineas as $aerolineas)
	<tr>
		<td>{!! $aerolineas->id !!}</td>
		<td>{!! $aerolineas->usuario->nombre !!}</td>
		<td>{!! $aerolineas->rfc !!}</td>
		<td>{!! $aerolineas->nombre !!}</td>
		<td>{!! $aerolineas->razon_social !!}</td>
		<td>{!! $aerolineas->id_ciudad !!}</td>
		<td>{!! $aerolineas->direccion !!}</td>
		<td>{!! $aerolineas->colonia !!}</td>
		<td>{!! $aerolineas->codigo_postal !!}</td>
		<td>{!! $aerolineas->telefono !!}</td>
		<td>{!! $aerolineas->status !!}</td>
		<td>			
			<a href="{!! 'aerolineas/'.$aerolineas->id !!}">Detalle</a>
			<a href="{!! 'aerolineas/'.$aerolineas->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/aerolineas/'.$aerolineas->id]) !!}
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