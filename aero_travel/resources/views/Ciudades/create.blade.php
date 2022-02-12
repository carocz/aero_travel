@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Crear</h1>
{!!Form::open(['url'=>'/ciudades']) !!}
{!! Form::label('id_estados','Estado') !!}
{!! Form::select ('id_estados',$estados->pluck('nombre','id'),null,[ 'placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('nombre','Nombre de la ciudad') !!}
{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre de la ciudad','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Agregar Ciudad') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/ciudades') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')