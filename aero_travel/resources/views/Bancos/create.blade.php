@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Crear</h1>
{!!Form::open(['url'=>'/bancos']) !!}
{!! Form::label('nombre','Nombre del país') !!}
{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del banco','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Agregar bancos') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/bancos') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')