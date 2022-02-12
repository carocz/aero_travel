@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">

<h1>Detalle</h1>
		<h3>ID:{!! $actividades->id !!}</h3>
		<h3>Operador turistico: {!! $actividades->id_operador_turistico !!}</h3>
		<h3>Ciudad: {!! $actividades->id_ciudad !!}</h3>
		<h3>Capacidad: {!! $actividades->capacidad !!}</h3>
		<h3>Descripción: {!! $actividades->descripcion !!}</h3>
		<h3>Todo incluido: {!! $actividades->todo_incluido_status !!}</h3>
		<h3>Precio compra: {!! $actividades->precio_compra!!}</h3>
		<h3>Precio venta: {!! $actividades->precio_venta!!}</h3>
		<h3>Status: {!! $actividades->status !!}</h3>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/actividades') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')