@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle</h1>
		<h4>ID: {!! $detalle_venta_actividades->id !!}</h4>
		<h4>Venta: {!! $detalle_venta_actividades->id_venta !!}</h4>
		<h4>Actividades: {!! $detalle_venta_actividades->id_actividades !!}</h4>
		<h4>Cantidad: {!! $detalle_venta_actividades->cantidad !!}</h4>
		<h4>Precio compra: {!! $detalle_venta_actividades->precio_compra !!}</h4>
		<h4>Precio venta: {!! $detalle_venta_actividades->precio_venta !!}</h4>
		<h4>Status{!! $detalle_venta_actividades->status !!}</h4>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/detalle_venta_actividades') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')