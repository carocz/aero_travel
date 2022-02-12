@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle</h1>
		<h2>ID: {!! $fotos_hoteles->id !!}</h2>
		<h2>Hotel: {!! $fotos_hoteles->hoteles->nombre !!}</h2>
		<h2><img src="{!! asset('../storage/fotos_hoteles') !!}/{!! $fotos_hoteles->ruta !!}" width="150px"> </h2>
		<h2>{!! $fotos_hoteles->status !!}</h2>
		
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/fotos_hoteles') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')