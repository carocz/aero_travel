@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Usuarios</h1>
<a href="usuarios/create">Crear un nuevo usuario</a>
<table>
	<tr>
		<th>ID</th>
		<th>Tipo de usuario</th>
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Telefono</th>
		<th>Correo</th>
		<th>Password</th>
		<th>Status</th>
	</tr> 
	@foreach($usuarios as $usuarios)
	<tr>
		<td>{!! $usuarios->id !!}</td>
		<td>{!! $usuarios->tipo_usuarios->nombre !!}</td>
		<td>{!! $usuarios->nombre !!}</td>
		<td>{!! $usuarios->apellido_paterno !!}</td>
		<td>{!! $usuarios->apellido_materno !!}</td>
		<td>{!! $usuarios->telefono !!}</td>
		<td>{!! $usuarios->correo !!}</td>
		<td>{!! $usuarios->password !!}</td>
		<td>{!! $usuarios->status !!}</td>
		<td>			
			<a href="{!! 'usuarios/'.$usuarios->id !!}">Detalle</a>
			<a href="{!! 'usuarios/'.$usuarios->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/usuarios/'.$usuarios->id]) !!}
			{!! Form::submit('Eliminar usuario') !!}
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