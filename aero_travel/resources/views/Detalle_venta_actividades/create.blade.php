@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Crear</h1>
{!!Form::open(['url'=>'/detalle_venta_actividades']) !!}
{!! Form::label('id_venta','Venta') !!}
{!! Form::select ('id_venta',$venta->pluck('id','id'),null,[ 'placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('id_actividades','Actividad') !!}
{!! Form::select ('id_actividades',$actividades->pluck('descripcion','id'),null,[ 'placeholder'=>'Selecciona','required' => 'required']) !!}
<br />
<br /> 
{!! Form::label('cantidad','Cantidad') !!}
{!! Form::number ('cantidad',null,['placeholder'=>'Ingresa cantidad']) !!}
<br />
<br />
{!! Form::label('precio_compra','Precio compra') !!}
{!! Form::number ('precio_compra',null,['placeholder'=>'Ingresa precio compra']) !!}
<br />
<br />
{!! Form::label('precio_venta','Precio venta') !!}
{!! Form::number ('precio_venta',null,['placeholder'=>'Ingresa precio venta']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Selecciona']) !!}
<br />
<br />
{!! Form::submit('Agregar detalle') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/detalle_venta_actividades') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>

        @include('template.pie')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
        $('#id_actividades').on('change',function(){
             var ruta="{!! asset('') !!}"+"detalleVenta/"+ $('#id_actividades').val();
              $.ajax({
                type:'GET',
                url:ruta,
                success:function(data){
                    alert('La actividad '+data[0].descripcion+' tiene un costo de '+data[0].precio_venta);
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