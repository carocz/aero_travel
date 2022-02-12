@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Crear</h1>
{!!Form::open(['url'=>'/usuarios']) !!}
	{!! Form::label('id_tipo_usuario','Tipo de usuario') !!}
{!! Form::select ('id_tipo_usuario',$tipo_usuarios->pluck('nombre','id'),['placeholder'=>'Ingresa tipo_usuarios','required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('nombre','Nombre del usuario') !!}
{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('apellido_paterno','Apellido Paterno del usuario') !!}
{!! Form::text ('apellido_paterno',null,['placeholder'=>'Ingresa apellido del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('apellido_materno','Apellido Materno del usuario') !!}
{!! Form::text ('apellido_materno',null,['placeholder'=>'Ingresa apellido del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('telefono','Telefono del usuario') !!}
{!! Form::text ('telefono',null,['placeholder'=>'Ingresa telefono del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('correo','Correo del usuario') !!}
{!! Form::email ('correo',null,['placeholder'=>'Ingresa correo del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('password','Contraseña del usuario') !!}
{!! Form::text ('password',null,['placeholder'=>'Contraseña del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Crear usuario') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/usuarios') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')