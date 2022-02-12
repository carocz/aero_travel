@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Crear</h1>
{!!Form::open(['url'=>'/tipo_usuarios']) !!}
{!! Form::label('nombre','Nombre del tipo de usuario') !!}
{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del tipo de usuario','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Agregar Tipo de usuario') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/tipo_usuarios') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')