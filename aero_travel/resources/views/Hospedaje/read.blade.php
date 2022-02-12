@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle</h1>
		<h5>ID:  {!! $hospedajes->id !!}</td>
		<h5>Hotel: {!! $hospedajes->hotel->nombre !!}</td>
		<h5>Ciudad: {!! $hospedajes->ciudades->nombre !!}</td>
		<h5>Fecha llegada: {!! $hospedajes->fecha_llegada !!}</td>
		<h5>Fecha salida: {!! $hospedajes->fecha_salida !!}</td>
		<h5>Todo incluido: {!! $hospedajes->todo_incluido_status !!}</td>
		<td>Compra: {!! $hospedajes->precio_compra !!}</td>
		<td>Venta: {!! $hospedajes->precio_venta !!}</td>
		<td>Capacidad: {!! $hospedajes->capacidad !!}</td>
		<td>Descripcion: {!! $hospedajes->descripcion !!}</td>
		<td>Status: {!! $hospedajes->status !!}</td>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/hospedajes') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')