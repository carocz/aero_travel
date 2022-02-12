@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle</h1>
		<h4>ID: {!! $detalle_venta_hospedaje->id !!}</h4>
		<h4>Venta: {!! $detalle_venta_hospedaje->id_venta !!}</h4>
		<h4>Actividades: {!! $detalle_venta_hospedaje->id_hospedaje !!}</h4>
		<h4>Cantidad: {!! $detalle_venta_hospedaje->cantidad !!}</h4>
		<h4>Precio compra: {!! $detalle_venta_hospedaje->precio_compra !!}</h4>
		<h4>Precio venta: {!! $detalle_venta_hospedaje->precio_venta !!}</h4>
		<h4>Status{!! $detalle_venta_hospedaje->status !!}</h4>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/detalle_venta_hospedaje') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')