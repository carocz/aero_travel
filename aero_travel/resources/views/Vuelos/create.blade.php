@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Crear</h1>
{!!Form::open(['url'=>'/vuelos']) !!}
{!! Form::label('id_aerolinea','Aerolinea') !!}
{!! Form::select ('id_aerolinea',$aerolineas->pluck('nombre','id'),null,[ 'required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('id_ciudad_origen','Ciudad de origen') !!}
{!! Form::select ('id_ciudad_origen',$ciudad_origen->pluck('nombre','id'),null,[ 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('id_ciudad_destino','Ciudad destino') !!}
{!! Form::select ('id_ciudad_destino',array('Ciudad de destino'),null,[ 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('fecha','Fecha') !!}
{!! Form::date ('fecha',null,['placeholder'=>'Ingresa fecha','required' => 'required']) !!}
<br />
<br />
{!! Form::label('hora_salida','Hora de salida') !!}
{!! Form::time ('hora_salida',null,['placeholder'=>'Hora de salida','required' => 'required']) !!}
<br />
<br />
{!! Form::label('hora_llegada','Hora de llegada') !!}
{!! Form::time ('hora_llegada',null,['placeholder'=>'Hora de llegada','required' => 'required']) !!}
<br />
<br />
{!! Form::label('precio_compra','Precio compra') !!}
{!! Form::text ('precio_compra',null,['placeholder'=>'Precio compra','required' => 'required']) !!}
<br />
<br />
{!! Form::label('precio_venta','Precio venta') !!}
{!! Form::text ('precio_venta',null,['placeholder'=>'Precio Venta','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Agregar vuelo') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/vuelos') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>
        @include('template.pie')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
        $('#id_ciudad_origen').on('change',function(){
            $('#id_ciudad_destino').empty();
            var ruta="{!! asset('') !!}"+"ciudadDestino/"+ $('#id_ciudad_origen').val();
            $.ajax({
                type:'GET',
                url:ruta,
                success:function(data){
                     $('#id_ciudad_destino').empty();
                     $('#id_ciudad_destino').append('<option>Seleccione una ciudad de destino</option>');
                    for (var i =0;i<data.length;i++) {
                         $('#id_ciudad_destino').append('<option value='+data[i].id+'>'
                        +data[i].nombre+'</option>');
                    }
                },
                 error:function(data){
                     alert('Ocurrio un error con la petición');
                }
            });
        });
    });
  </script>
</body>
</html>