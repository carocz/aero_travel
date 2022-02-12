@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/hospedajes/'.$hospedajes->id]) !!}
{!! Form::label('id_hotel','Hotel') !!}
{!! Form::select ('id_hotel',$hotel->pluck('nombre','id'),$hospedajes->id_hotel,[ 'required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('id_ciudad','Ciudades') !!}
{!! Form::select ('id_ciudad',$ciudades->pluck('nombre','id'),$hospedajes->id_ciudad,[ 'required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('fecha_llegada','Fecha llegada') !!}
{!! Form::date ('fecha_llegada',$hospedajes->fecha_llegada,['placeholder'=>'Ingresa fecha llegada','required' => 'required']) !!}
<br />
<br />
{!! Form::label('fecha_salida','Fecha salida') !!}
{!! Form::date ('fecha_salida',$hospedajes->fecha_salida,['placeholder'=>'Ingresa fecha salida','required' => 'required']) !!}
<br />
<br />
{!! Form::label('todo_incluido_status','Todo incluido Status') !!}
{!! Form::select ('todo_incluido_status', array('1'=>'Activo','0'=>'Baja'),$hospedajes->todo_incluido_status,['placeholder'=>'Selecciona','required' => 'required',]) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$hospedajes->status,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::label('precio_compra','Precio compra') !!}
{!! Form::number('precio_compra',$hospedajes->precio_compra,['placeholder'=>'Precio compra', 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('precio_venta','Precio venta') !!}
{!! Form::number('precio_venta',$hospedajes->precio_venta,['placeholder'=>'Precio venta', 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('capacidad','capacidad') !!}
{!! Form::number('capacidad',$hospedajes->capacidad,['placeholder'=>'Capacidad', 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('descripcion','Descripcion') !!}
<br />
{!! Form::textarea('descripcion',$hospedajes->descripcion,['placeholder'=>'Descripcion', 'required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Editar hospedaje') !!}
{!! Form::close() !!}
<br/>
<br/>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/hospedajes') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')