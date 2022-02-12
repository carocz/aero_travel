@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Tipo de usuarios</h1>
<a href="tipo_usuarios/create">Crear un nuevo tipo de usuario</a>
<table>
	<tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Status</th>
	</tr> 
	@foreach($tipo_usuarios as $tipo_usuarios)
	<tr>
		<td>{!! $tipo_usuarios->id !!}</td>
		<td>{!! $tipo_usuarios->nombre !!}</td>
		<td>{!! $tipo_usuarios->status !!}</td>
		<td>			
			<a href="{!! 'tipo_usuarios/'.$tipo_usuarios->id !!}">Detalle</a>
			<a href="{!! 'tipo_usuarios/'.$tipo_usuarios->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/tipo_usuarios/'.$tipo_usuarios->id]) !!}
			{!! Form::submit('Eliminar tipo de usuario') !!}
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