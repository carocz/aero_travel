@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Estados</h1>
<a href="estados/create">Agregar un estado</a>
<table>
	<tr>
		<th>ID</th>
		<th>País</th>
		<th>Nombre</th>
		<th>Status</th>
	</tr> 
	@foreach($estados as $estados)
	<tr>
		<td>{!! $estados->id !!}</td>
		<td>{!! $estados->pais->nombre !!}</td>
		<td>{!! $estados->nombre !!}</td>
		<td>{!! $estados->status !!}</td>
		<td>			
			<a href="{!! 'estados/'.$estados->id !!}">Detalle</a>
			<a href="{!! 'estados/'.$estados->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/estados/'.$estados->id]) !!}
			{!! Form::submit('Eliminar estado') !!}
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