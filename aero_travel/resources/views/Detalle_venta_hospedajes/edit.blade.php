@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/detalle_venta_hospedaje/'.$detalle_venta_hospedaje->id]) !!}
{!! Form::label('id_venta','Venta') !!}
{!! Form::select ('id_venta',$venta->pluck('id','id'),$detalle_venta_hospedaje->id_venta,[ 'required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('id_hospedaje','Actividad') !!}
{!! Form::select ('id_hospedaje',$hospedajes->pluck('id','id'),$detalle_venta_hospedaje->id_hospedaje,[ 'placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('cantidad','Cantidad') !!}
{!! Form::number ('cantidad',$detalle_venta_hospedaje->cantidad,['placeholder'=>'Ingresa cantidad']) !!}
<br />
<br />
{!! Form::label('precio_compra','Precio compra') !!}
{!! Form::number ('precio_compra',$detalle_venta_hospedaje->precio_compra,['placeholder'=>'Ingresa precio compra']) !!}
<br />
<br />
{!! Form::label('precio_venta','Precio venta') !!}
{!! Form::number ('precio_venta',$detalle_venta_hospedaje->precio_venta,['placeholder'=>'Ingresa precio venta']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$detalle_venta_hospedaje->status,['placeholder'=>'Selecciona']) !!}
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