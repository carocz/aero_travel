@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Crear</h1>
{!!Form::open(['url'=>'/asientos_por_vuelo']) !!}
{!! Form::label('id_vuelo','Vuelo') !!}
{!! Form::select ('id_vuelo',$vuelos->pluck('id','id'),null,[ 'placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br /> 
<div id='detalle' name="detalle">
</div>
{!! Form::label('detalle','Detalle') !!}
{!! Form::text('detalle',null,['placeholder'=>'Detalle', 'required' => 'required']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Selecciona', 'required' => 'required']) !!}
<br />
<br />

{!! Form::submit('Agregar asiento') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/asientos_por_vuelo') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
        $('#id_vuelo').on('change',function(){
        	$('#detalle').empty();
        	var ruta="{!! asset('') !!}"+"vuelo/"+ $('#id_vuelo').val();
        	$.ajax({
        		type:'GET',
        		url:ruta,
        		success:function(data){
        				$('#detalle').append('<h4>Id:'+data[0].id+'</h4>');
        				$('#detalle').append('<h4>Aerolinea:'+data[0].id_aerolinea+'</h4>');
        				$('#detalle').append('<h4>Ciudad destino:'+data[0].id_ciudad_origen+'</h4>');
        				$('#detalle').append('<h4>Ciudad destino:'+data[0].id_ciudad_destino+'</h4>');
        				$('#detalle').append('<h4>Fecha:'+data[0].fecha+'</h4>');
        				$('#detalle').append('<h4>Fecha:'+data[0].hora_salida+'</h4>');
        				$('#detalle').append('<h4>Fecha:'+data[0].hora_llegada+'</h4>');
        				$('#detalle').append('<h4>Fecha:'+data[0].precio_compra+'</h4>');
        				$('#detalle').append('<h4>Fecha:'+data[0].precio_venta+'</h4>');

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