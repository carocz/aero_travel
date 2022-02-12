@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/pais/'.$pais->id]) !!}
{!! Form::label('id','ID') !!}
{!! Form::text ('id',$pais->id,['placeholder'=>'Ingresa ID']) !!}
<br />
<br />
{!! Form::label('nombre','Nombre del tipo de usuario') !!}
{!! Form::text ('nombre',$pais->nombre,['placeholder'=>'Ingresa nombre del país','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$pais->status,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Editar País') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/pais') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')