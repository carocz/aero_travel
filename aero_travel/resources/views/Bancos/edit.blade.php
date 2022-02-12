@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/bancos/'.$bancos->id]) !!}
{!! Form::label('id','ID') !!}
{!! Form::text ('id',$bancos->id,['placeholder'=>'Ingresa ID','required' => 'required']) !!}
<br />
<br />
{!! Form::label('nombre','Nombre del tipo de usuario') !!}
{!! Form::text ('nombre',$bancos->nombre,['placeholder'=>'Ingresa nombre del banco','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$bancos->status,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Editar Banco') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/bancos') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')