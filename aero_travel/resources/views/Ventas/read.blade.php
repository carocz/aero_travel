@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalles</h1>
		<h3>{!! $venta->id !!}</h3>
		<h3>{!! $venta->cliente->nombre !!}</h3>
		<h3>{!! $venta->fecha !!}</h3>
		<h3>{!! $venta->nombre_beneficiario !!}</h3>
		<h3>{!! $venta->banco->nombre !!}</h3>
		<h3>{!! $venta->tipo_tarjeta !!}</h3>
		<h3>{!! $venta->mes_vencimiento !!}</h3>
		<h3>{!! $venta->cvv !!}</h3>
		<h3>{!! $venta->subtotal !!}</h3>
		<h3>{!! $venta->iva !!}</h3>
		<h3>{!! $venta->total !!}</h3>
		<h3>{!! $venta->status !!}</h3>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/venta') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')
        @include('template.footer')