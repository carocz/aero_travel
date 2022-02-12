@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Crear</h1>
{!!Form::open(['url'=>'/detalle_venta_hospedaje']) !!}
{!! Form::label('id_venta','Venta') !!}
{!! Form::select ('id_venta',$venta->pluck('id','id'),null,[ 'placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('id_hospedaje','Hospedaje') !!}
{!! Form::select ('id_hospedaje',$hospedajes->pluck('id','id'),null,[ 'placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('cantidad','Cantidad') !!}
{!! Form::number ('cantidad',null,['placeholder'=>'Ingresa cantidad']) !!}
<br />
<br />
{!! Form::label('precio_compra','Precio compra') !!}
{!! Form::number ('precio_compra',null,['placeholder'=>'Ingresa precio compra']) !!}
<br />
<br />
{!! Form::label('precio_venta','Precio venta') !!}
{!! Form::number ('precio_venta',null,['placeholder'=>'Ingresa precio venta']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Selecciona']) !!}
<br />
<br />
{!! Form::submit('Agregar detalle') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/detalle_venta_hospedaje') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')