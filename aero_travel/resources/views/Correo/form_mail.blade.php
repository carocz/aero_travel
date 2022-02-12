@include('template.encabezado')
@include('template.menu')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
	<h1>Enviar correo</h1>
{!! Form::open(['url'=>'/enviar_correo','role'=>'form','enctype'=>'multipart/form-data']) !!}
{!! Form::label('destinatario','Para:') !!}
<br />
{!! Form::email ('destinatario',null,['placeholder'=>'Ingresa el correo del destinatario']) !!}
<br />
<br />
{!! Form::label('asunto','Asunto:') !!}
<br />
{!! Form::text ('asunto',null,['placeholder'=>'Ingresa el asunto']) !!}
<br />
<br />
{!! Form::label('contenido','Contenido:') !!}
<br />
{!! Form::textarea ('contenido',null,['placeholder'=>'']) !!}
<br />
<br />
 {!! Form::submit('Enviar Correo') !!}
{!! Form::close() !!}
                    </div>
                </div>
            </section>

        @include('template.pie')