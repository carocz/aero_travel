
                <div class="container px-5 my-5">
                    <div class="row gx-5">

<center>
	<h1 style="font-family: Arial, Helvetica, sans-serif;color:blue;">Reporte vuelos </h1>
	<p style="font-family: Arial, Helvetica, sans-serif;"><?=$date; ?></p>
	</center>
<table style="font-family: Arial, Helvetica, sans-serif;width: 100%;">
	<tr>
		<th>ID</th>
		<th>Aerolinea</th>
		<th>Ciudad de origen</th>
		<th>Ciudad de destino</th>
		<th>Fecha</th>
		<th>Hora salida</th>
		<th>Hora llegada</th>
		<th>Precio Compra</th>
		<th>Precio Venta</th>
		<th>Status</th>
	</tr> 
<?php	foreach($data as $vuelos){ ?>
		<tr>
			<td>{!! $vuelos->id !!}</td>
		<td>{!! $vuelos->aerolineas->nombre !!}</td>
		<td>{!! $vuelos->ciudad_origen->nombre !!}</td>
		<td>{!! $vuelos->ciudad_destino->nombre !!}</td>
		<td>{!! $vuelos->fecha !!}</td>
		<td>{!! $vuelos->hora_salida !!}</td>
		<td>{!! $vuelos->hora_llegada !!}</td>
		<td>{!! $vuelos->precio_compra !!}</td>
		<td>{!! $vuelos->precio_venta !!}</td>
		<td>{!! $vuelos->status !!}</td>
	</tr>
	<?php } ?>
</table>

</div>
     </div>