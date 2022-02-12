@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Pais</h1>
<a href="pais/create">Crear un nuevo pais</a>
<table>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Status</th>
	</tr> 
	@foreach($pais as $pais)
	<tr>
		<td>{!! $pais->id !!}</td>
		<td>{!! $pais->nombre !!}</td>
		<td>{!! $pais->status !!}</td>
		<td>			
			<a href="{!! 'pais/'.$pais->id !!}">Detalle</a>
			<a href="{!! 'pais/'.$pais->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/pais/'.$pais->id]) !!}
			{!! Form::submit('Eliminar pais') !!}
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