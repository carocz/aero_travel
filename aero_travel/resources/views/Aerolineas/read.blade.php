@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalles</h1>
		<h2>ID: {!! $aerolineas->id !!}</h2>
		<h2>USUARIO: {!! $aerolineas->usuario->nombre !!}</h2>
		<h2>RFC: {!! $aerolineas->rfc !!}</h2>
		<h2>NOMBRE: {!! $aerolineas->nombre !!}</h2>
		<h2>RAZÓN SOCIAL: {!! $aerolineas->razon_social !!}</h2>
		<h2>CIUDAD: {!! $aerolineas->ciudad->nombre !!}</h2>
		<h2>CALLE: {!! $aerolineas->direccion !!}</h2>
		<h2>COL: {!! $aerolineas->colonia !!}</h2>
		<h2>CP: {!! $aerolineas->codigo_postal !!}</h2>
		<h2>Tel: {!! $aerolineas->telefono !!}</h2>
		<h2>Status: {!! $aerolineas->status !!}</h2>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/aerolineas') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')