@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/asientos_por_vuelo/'.$asientos_por_vuelo->id]) !!}
{!! Form::label('id_vuelo','Vuelo turistico') !!}
{!! Form::select ('id_vuelo',$vuelos->pluck('id'),$asientos_por_vuelo->id_vuelo) !!}
<br />
<br /> 
{!! Form::label('detalle','Detalle') !!}
{!! Form::text('detalle',$asientos_por_vuelo->detalle,['placeholder'=>'Detalle', 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$asientos_por_vuelo->status,['placeholder'=>'Selecciona', 'required' => 'required']) !!}
<br />
<br />

{!! Form::submit('Editar asiento') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/asientos_por_vuelo') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')