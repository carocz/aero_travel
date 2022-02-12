@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/actividades/'.$actividades->id]) !!}
{!! Form::label('id_operador_turisitico','Operador turistico') !!}
{!! Form::select ('id_operador_turisitico',$operador_turistico->pluck('nombre','id'),$actividades->operador_turistico->nombre) !!}
<br />
<br /> 
{!! Form::label('id_ciudad','Ciudad') !!}
{!! Form::select ('id_ciudad',$ciudades->pluck('nombre','id'),$actividades->id_ciudad) !!}
<br />
<br />
{!! Form::label('capacidad','capacidad') !!}
{!! Form::number('capacidad',$actividades->capacidad,['placeholder'=>'Capacidad', 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('descripcion','Descripcion') !!}
<br />
{!! Form::textarea('descripcion',$actividades->descripcion,['placeholder'=>'Descripcion', 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('todo_incluido_status','Todo incluido') !!}
{!! Form::select ('todo_incluido_status', array('1'=>'Activo','0'=>'Baja'),$actividades->todo_incluido_status,['placeholder'=>'Selecciona', 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('precio_compra','Precio compra') !!}
{!! Form::number('precio_compra',$actividades->precio_compra,['placeholder'=>'Precio compra', 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('precio_venta','Precio venta') !!}
{!! Form::number('precio_venta',$actividades->precio_venta,['placeholder'=>'Precio venta', 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$actividades->status,['placeholder'=>'Selecciona', 'required' => 'required']) !!}
<br />
<br />

{!! Form::submit('Agregar actividad') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/actividades') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')