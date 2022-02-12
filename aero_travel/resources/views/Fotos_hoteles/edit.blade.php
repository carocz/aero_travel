@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/fotos_hoteles/'.$fotos_hoteles->id,'enctype' => 'multipart/form-data']) !!}
{!! Form::select ('id_hotel',$hoteles->pluck('nombre','id'),$fotos_hoteles->hoteles->nombre,['required' => 'required']) !!}
<br />
<br /> 
{!! Form::label ('ruta','Ruta') !!}
{!! Form::file ('ruta',['required' => 'required']) !!}
		<br/>
		<br/>

{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$fotos_hoteles->status,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Agregar Foto') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/fotos_hoteles') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')