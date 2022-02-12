@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/tipo_usuarios/'.$tipo_usuarios->id]) !!}
{!! Form::label('id','ID') !!}
{!! Form::text ('id',$tipo_usuarios->id,['placeholder'=>'Ingresa ID','required' => 'required']) !!}
<br />
<br />
{!! Form::label('nombre','Nombre del tipo de usuario') !!}
{!! Form::text ('nombre',$tipo_usuarios->nombre,['placeholder'=>'Ingresa nombre del tipo de usuario','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$tipo_usuarios->status,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Editar Tipo de usuario') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/tipo_usuarios') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')