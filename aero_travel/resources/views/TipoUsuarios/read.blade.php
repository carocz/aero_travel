@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Detalle</h1>
<h2>Nombre:{!! $tipo_usuarios->nombre !!}</h2>
<h2>Status:{!! $tipo_usuarios->status !!}</h2>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/tipo_usuarios') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')