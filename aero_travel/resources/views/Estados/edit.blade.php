@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/estados/'.$estados->id]) !!}
{!! Form::label('id_pais','País') !!}
{!! Form::select ('id_pais',$pais->pluck('nombre','id'),$estados->id_pais) !!}
<br />
<br /> 
{!! Form::label('nombre','Nombre de la ciudad') !!}
{!! Form::text ('nombre',$estados->nombre,['placeholder'=>'Ingresa nombre de la ciudad','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$estados->status,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Agregar Estado') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/estados') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')