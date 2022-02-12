@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalles</h1>
		<h3>Id: {!! $asientos_por_vuelo->id !!}</h3>
		<h3>Vuelo: {!! $asientos_por_vuelo->vuelos->id !!}</h3>
		<h3>Detalle: {!! $asientos_por_vuelo->detalle !!}</h3>
		<h3>Status: {!! $asientos_por_vuelo->status !!}</h3>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/asientos_por_vuelo') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')