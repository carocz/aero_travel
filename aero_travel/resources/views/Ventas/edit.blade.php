@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Editar</h1>
{!!Form::open(['method'=>'PATCH','url'=>'/venta/'.$venta->id]) !!}
{!! Form::label('id_cliente','Cliente') !!}
{!! Form::select ('id_cliente',$cliente->pluck('nombre','id'),$venta->cliente->nombre) !!}
<br />
<br />
{!! Form::label('fecha','Fecha') !!}
{!! Form::date ('fecha',$venta->fecha,['placeholder'=>'Ingresa fecha']) !!}
<br />
<br />
{!! Form::label('nombre_beneficiario','Nombre beneficiario') !!}
{!! Form::text ('nombre_beneficiario',$venta->nombre_beneficiario,['placeholder'=>'Ingresa nombre beneficiario']) !!}
<br />
<br />
{!! Form::label('id_banco','Banco') !!}
{!! Form::select ('id_banco',$banco->pluck('nombre','id'),$venta->banco->nombre) !!}
<br />
<br />
{!! Form::label('tipo_tarjeta','Tipo tarjeta') !!}
{!! Form::select ('tipo_tarjeta', array('1'=>'Debito','0'=>'Crédito'),$venta->tipo_tarjeta,['placeholder'=>'Selecciona']) !!}
<br />
<br />
{!! Form::label('mes_vencimiento','Fecha de vencimiento') !!}
{!! Form::month ('mes_vencimiento',$venta->mes_vencimiento,['placeholder'=>'Ingresa mes de vencimiento']) !!}
<br />
<br />
{!! Form::label('cvv','CVV') !!}
{!! Form::number ('cvv',$venta->cvv,['placeholder'=>'CVV']) !!}
<br />
<br />
{!! Form::label('subtotal','Subtotal') !!}
{!! Form::text ('subtotal',$venta->subtotal,['placeholder'=>'Subtotal']) !!}
<br />
<br />
{!! Form::label('iva','Iva') !!}
{!! Form::text ('iva',$venta->iva,['placeholder'=>'Iva']) !!}
<br />
<br />
{!! Form::label('total','Total') !!}
{!! Form::text ('total',$venta->total,['placeholder'=>'Total']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),$venta->status,['placeholder'=>'Selecciona']) !!}
<br />
<br />
{!! Form::submit('Editar venta') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/venta') !!}">Regresar a la lista</a>
                    </div>
                </div>
            </section>
        @include('template.pie')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $( document ).ready(function() {
   
        $('#iva').on('change',function(){ 
               	
    	var sub=$('#subtotal').val();
    	var iva=$('#iva').val();
    	$('#total').val(parseInt(sub)+parseInt(iva));    
        });
    });
  </script>
        @include('template.footer')
</body>
</html>