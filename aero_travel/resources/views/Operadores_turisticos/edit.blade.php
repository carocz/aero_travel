@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/operadores_turisticos/'.$operador_turistico->id]) !!}
{!! Form::label('id','ID') !!}
{!! Form::text ('id',$operador_turistico->id,['placeholder'=>'Ingresa ID','required' => 'required']) !!}
<br />
<br />
{!! Form::select ('id_usuarios',$usuario->pluck('nombre','id'),$operador_turistico->usuario->nombre,['required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('nombre','RFC') !!}
{!! Form::text ('nombre',$operador_turistico->rfc,['placeholder'=>'Ingresa RFC','required' => 'required']) !!}
<br />
<br />
{!! Form::label('nombre','Nombre del tipo de usuario') !!}
{!! Form::text ('nombre',$operador_turistico->nombre,['placeholder'=>'Ingresa nombre del país','required' => 'required']) !!}
<br />
<br />
{!! Form::label('razon_social','Razón social') !!}
{!! Form::text ('razon_social',$operador_turistico->razon_social,['placeholder'=>'Ingresa razon social','required' => 'required']) !!}
<br />
<br />
{!! Form::select ('id_ciudad',$ciudad->pluck('nombre','id'),$operador_turistico->ciudad->nombre,['required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('direccion','Calle y numero') !!}
{!! Form::text ('direccion',$operador_turistico->direccion,['placeholder'=>'Ingresa calle y número','required' => 'required']) !!}
<br />
<br />
{!! Form::label('colonia','Colonia') !!}
{!! Form::text ('colonia',$operador_turistico->colonia,['placeholder'=>'Ingresa colonia','required' => 'required']) !!}
<br />
<br />
{!! Form::label('telefono','Teléfono') !!}
{!! Form::text ('telefono',$operador_turistico->colonia,['placeholder'=>'Ingresa teléfono','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$operador_turistico->status,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Editar Aerolinea') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/operadores_turisicos') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')