@include('template.encabezado')
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/vuelos/'.$vuelos->id]) !!}
{!! Form::label('id_aerolinea','Aerolinea') !!}
{!! Form::select ('id_aerolinea',$aerolineas->pluck('nombre','id'),$vuelos->id_aerolinea,['required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('id_ciudad_origen','Ciudad de origen') !!}
{!! Form::select ('id_ciudad_origen',$ciudades->pluck('nombre','id'),$vuelos->id_ciudad_origen,'required' => 'required') !!}
<br />
<br />
{!! Form::label('id_ciudad_destino','Ciudad destino') !!}
{!! Form::select ('id_ciudad_destino',$ciudades->pluck('nombre','id'),$vuelos->id_ciudad_destino,['required' => 'required']) !!}
<br />
<br />
{!! Form::label('fecha','Fecha') !!}
{!! Form::date ('fecha',$vuelos->fecha,['placeholder'=>'Ingresa fecha','required' => 'required']) !!}
<br />
<br />
{!! Form::label('hora_salida','Hora de salida') !!}
{!! Form::time ('hora_salida',$vuelos->hora_salida,['placeholder'=>'Hora de salida','required' => 'required']) !!}
<br />
<br />
{!! Form::label('hora_llegada','Hora de llegada') !!}
{!! Form::time ('hora_llegada',$vuelos->hora_llegada,['placeholder'=>'Hora de llegada','required' => 'required']) !!}
<br />
<br />
{!! Form::label('precio_compra','Precio compra') !!}
{!! Form::text ('precio_compra',$vuelos->precio_compra,['placeholder'=>'Precio compra','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Precio venta') !!}
{!! Form::text ('status',$vuelos->status,['placeholder'=>'Precio Venta','required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$vuelos->status,['placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br />
{!! Form::submit('Editar vuelo') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/vuelos') !!}">Regresar a la lista</a>
                    </div>
                </div>
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