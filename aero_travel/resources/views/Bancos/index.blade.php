@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Pais</h1>
<a href="bancos/create">Crear un nuevo banco</a>
<table>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Status</th>
	</tr> 
	@foreach($bancos as $bancos)
	<tr>
		<td>{!! $bancos->id !!}</td>
		<td>{!! $bancos->nombre !!}</td>
		<td>{!! $bancos->status !!}</td>
		<td>			
			<a href="{!! 'bancos/'.$bancos->id !!}">Detalle</a>
			<a href="{!! 'bancos/'.$bancos->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/bancos/'.$bancos->id]) !!}
			{!! Form::submit('Eliminar banco') !!}
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