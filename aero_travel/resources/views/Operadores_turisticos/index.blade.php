@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Operador turístico</h1>
<a href="operadores_turisticos/create">Agregar un operador turistico</a>
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
	@foreach($operador_turistico as $operador_turistico)
	<tr>
		<td>{!! $operador_turistico->id !!}</td>
		<td>{!! $operador_turistico->usuario->nombre !!}</td>
		<td>{!! $operador_turistico->rfc !!}</td>
		<td>{!! $operador_turistico->nombre !!}</td>
		<td>{!! $operador_turistico->razon_social !!}</td>
		<td>{!! $operador_turistico->id_ciudad !!}</td>
		<td>{!! $operador_turistico->direccion !!}</td>
		<td>{!! $operador_turistico->colonia !!}</td>
		<td>{!! $operador_turistico->codigo_postal !!}</td>
		<td>{!! $operador_turistico->telefono !!}</td>
		<td>{!! $operador_turistico->status !!}</td>
		<td>			
			<a href="{!! 'operadores_turisticos/'.$operador_turistico->id !!}">Detalle</a>
			<a href="{!! 'operadores_turisticos/'.$operador_turistico->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/operadores_turisticos/'.$operador_turistico->id]) !!}
			{!! Form::submit('Eliminar Operador') !!}
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