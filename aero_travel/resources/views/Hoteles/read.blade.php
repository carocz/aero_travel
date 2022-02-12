@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalles</h1>
		<h2>{!! $hoteles->id !!}</h2>
		<h2>{!! $hoteles->usuario->nombre !!}</h2>
		<h2>{!! $hoteles->rfc !!}</h2>
		<h2>{!! $hoteles->nombre !!}</h2>
		<h2>{!! $hoteles->razon_social !!}</h2>
		<h2>{!! $hoteles->id_ciudad !!}</h2>
		<h2>{!! $hoteles->direccion !!}</h2>
		<h2>{!! $hoteles->colonia !!}</h2>
		<h2>{!! $hoteles->codigo_postal !!}</h2>
		<h2>{!! $hoteles->telefono !!}</h2>
		<h2>{!! $hoteles->status !!}</h2>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/hoteles') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')