

<center>
	<h1 style="font-family: Arial, Helvetica, sans-serif;color:blue;">Reporte hoteles </h1>
	<p style="font-family: Arial, Helvetica, sans-serif;"><?=$date; ?></p>
	</center>
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<center>
	<table style="font-family: Arial, Helvetica, sans-serif;width: 100%;">
	<tr>
		<th>ID</th>
		<th>Hotel</th>
		<th>Ruta</th>
		<th>Status</th>
	</tr> 
<?php	foreach($data as $fotos_hoteles){ ?>
		<tr style="padding:10px 30px;">
		<td>{!! $fotos_hoteles->id !!}</td>
		<td>{!! $fotos_hoteles->hoteles->nombre !!}</td>
		<td><img src="{!! asset('../storage/fotos_hoteles') !!}/{!! $fotos_hoteles->ruta !!}" width="150px"> </td>
		<td>{!! $fotos_hoteles->status !!}</td>
	</tr>
	<?php } ?>
</table>
</center>


</div>
     </div>
