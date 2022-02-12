@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle</h1>
<h2>Estado:{!! $ciudades->estados->nombre !!}</h2>
<h2>Nombre:{!! $ciudades->nombre !!}</h2>
<h2>Status:{!! $ciudades->status !!}</h2>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/ciudades') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')