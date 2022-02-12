@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalles</h1>
		<h2>{!! $operador_turistico->id !!}</h2>
		<h2>{!! $operador_turistico->usuario->nombre !!}</h2>
		<h2>{!! $operador_turistico->rfc !!}</h2>
		<h2>{!! $operador_turistico->nombre !!}</h2>
		<h2>{!! $operador_turistico->razon_social !!}</h2>
		<h2>{!! $operador_turistico->id_ciudad !!}</h2>
		<h2>{!! $operador_turistico->direccion !!}</h2>
		<h2>{!! $operador_turistico->colonia !!}</h2>
		<h2>{!! $operador_turistico->codigo_postal !!}</h2>
		<h2>{!! $operador_turistico->telefono !!}</h2>
		<h2>{!! $operador_turistico->status !!}</h2>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/operadores_turisticos') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')