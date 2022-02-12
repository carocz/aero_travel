@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/usuarios/'.$usuarios->id]) !!}
{!! Form::label('id_tipo_usuario','Tipo de usuario') !!}
{!! Form::select ('id_tipo_usuario',$tipo_usuarios->pluck('nombre','id'),$usuarios->tipo_usuarios->nombre,['required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('nombre','Nombre del usuario') !!}
{!! Form::text ('nombre',$usuarios->nombre,['placeholder'=>'Ingresa nombre del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('apellido_paterno','Apellido Paterno del usuario') !!}
{!! Form::text ('apellido_paterno',$usuarios->apellido_paterno,['placeholder'=>'Ingresa apellido del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('apellido_materno','Apellido Materno del usuario') !!}
{!! Form::text ('apellido_materno',$usuarios->apellido_materno,['placeholder'=>'Ingresa apellido del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('telefono','Telefono del usuario') !!}
{!! Form::text ('telefono',$usuarios->telefono,['placeholder'=>'Ingresa telefono del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('correo','Correo del usuario') !!}
{!! Form::text ('correo',$usuarios->correo,['placeholder'=>'Ingresa correo del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('password','Contraseña del usuario') !!}
{!! Form::text ('password',$usuarios->password,['placeholder'=>'Contraseña del cliente','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$usuarios->status,['placeholder'=>'Selecciona','required' => 'required']) !!}
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