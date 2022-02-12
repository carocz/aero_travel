@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle</h1>
		<h5>ID:  {!! $estados->id !!}</h5>
		<h5>Pais: {!! $estados->pais->nombre !!}</h5>
		<h5>Nombre: {!! $estados->nombre !!}</h5>
		<h5>Status: {!! $estados->status !!}</h5>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/estados') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')