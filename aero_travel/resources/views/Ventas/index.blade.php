@include('template.encabezado')
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<h1>Venta</h1>
<a href="venta/create">Crear una nueva venta</a>
<table>
	<tr>
		<th>ID</th>
		<th>Cliente</th>
		<th>Fecha</th>
		<th>Nombre beneficiario</th>
		<th>Banco</th>
		<th>Tipo de tarjeta</th>
		<th>Fecha de vencimiento</th>
		<th>CVV</th>
		<th>Subtotal</th>
		<th>iva</th>
		<th>Total</th>
		<th>Status</th>
	</tr> 
	@foreach($venta as $venta)
	<tr>
		<td>{!! $venta->id !!}</td>
		<td>{!! $venta->cliente->nombre !!}</td>
		<td>{!! $venta->fecha !!}</td>
		<td>{!! $venta->nombre_beneficiario !!}</td>
		<td>{!! $venta->banco->nombre !!}</td>
		<td>{!! $venta->tipo_tarjeta !!}</td>
		<td>{!! $venta->mes_vencimiento !!}</td>
		<td>{!! $venta->cvv !!}</td>
		<td>{!! $venta->subtotal !!}</td>
		<td>{!! $venta->iva !!}</td>
		<td>{!! $venta->total !!}</td>
		<td>{!! $venta->status !!}</td>
		<td>			
			<a href="{!! 'venta/'.$venta->id !!}">Detalle</a>
			<a href="{!! 'venta/'.$venta->id.'/edit' !!}">Editar</a>
				{!!Form::open(['method'=>'DELETE','url'=>'/venta/'.$venta->id]) !!}
			{!! Form::submit('Eliminar venta') !!}
			{!! Form::close() !!}
		</td>
	</tr>
	</tr>
	@endforeach
</table>
<br />
<a href="{!! asset('/') !!}">Regresar al menú</a>
                    </div>
                </div>
            </section>

        @include('template.pie')