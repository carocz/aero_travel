@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle</h1>
		<h2>ID: {!! $usuarios->id !!}</h2>
		<h2>Tipo de usuario: {!! $usuarios->tipo_usuarios->nombre !!}</h2>
		<h2>Nombre: {!! $usuarios->nombre !!}</h2>
		<h2>Apellido Paterno: {!! $usuarios->apellido_paterno !!}</h2>
		<h2>Apellido Materno: {!! $usuarios->apellido_materno !!}</h2>
		<h2>Teléfono: {!! $usuarios->telefono !!}</h2>
		<h2>Correo: {!! $usuarios->correo !!}</h2>
		<h2>Password: {!! $usuarios->password !!}</h2>
		<h2>Status: {!! $usuarios->status !!}</h2>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/usuarios') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')