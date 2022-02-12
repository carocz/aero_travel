@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Crear</h1>
{!!Form::open(['url'=>'/operadores_turisticos']) !!}

{!! Form::select ('id_usuarios',$usuario->pluck('nombre','id'),null,['required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('rfc','RFC') !!}
{!! Form::text ('rfc',null,['placeholder'=>'Ingresa RFC','required' => 'required']) !!}
<br />
<br />
{!! Form::label('nombre','Nombre') !!}
{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre','required' => 'required']) !!}
<br />
<br />
{!! Form::label('razon_social','Razón social') !!}
{!! Form::text ('razon_social',null,['placeholder'=>'Ingresa razon social','required' => 'required']) !!}
<br />
<br />
{!! Form::select ('id_ciudad',$ciudades->pluck('nombre','id'),null,['required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('direccion','Calle y numero') !!}
{!! Form::text ('direccion',null,['placeholder'=>'Ingresa calle y número','required' => 'required']) !!}
<br />
<br />
{!! Form::label('colonia','Colonia') !!}
{!! Form::text ('colonia',null,['placeholder'=>'Ingresa colonia','required' => 'required']) !!}
<br />
<br />
{!! Form::label('codigo_postal','Código postal') !!}
{!! Form::text ('codigo_postal',null,['placeholder'=>'Ingresa código postal','required' => 'required']) !!}
<br />
<br />
{!! Form::label('telefono','Teléfono') !!}
{!! Form::text ('telefono',null,['placeholder'=>'Ingresa teléfono','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Agregar operador turistico') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/operadores_turisticos') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
   $('#id_ciudad').on('change', function(){
        $('#status').append('<option>Seleccione una opción</option>');
    });
</script>
</body>
</html>