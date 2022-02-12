@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalles</h1>
		<h3>ID: {!! $vuelos->id !!}</h3>
		<h3>Aerolinea: {!! $vuelos->aerolineas->nombre !!}</h3>
		<h3>Ciudad de origen: {!! $vuelos->ciudad_origen->nombre !!}</h3>
		<h3>Ciudad de destino: {!! $vuelos->ciudad_destino->nombre !!}</h3>
		<h3>Fecha: {!! $vuelos->fecha !!}</h3>
		<h3>Hora de salida:  {!! $vuelos->hora_salida !!}</h3>
		<h3>Hora de llegada: {!! $vuelos->hora_llegada !!}</h3>
		<h3>Precio de compra: {!! $vuelos->precio_compra !!}</h3>
		<h3>Precio de venta: {!! $vuelos->precio_venta !!}</h3>
		<h3>Status: {!! $vuelos->status !!}</h3>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/vuelos') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')
        @include('template.footer')