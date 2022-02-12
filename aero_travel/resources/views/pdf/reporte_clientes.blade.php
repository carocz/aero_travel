<body>
                <div class="container px-5 my-5">
                    <div class="row gx-5">
<center>
	<h1 style="font-family: Arial, Helvetica, sans-serif;color:blue;">Reporte clientes </h1>
	<p style="font-family: Arial, Helvetica, sans-serif;"><?=$date; ?></p>
</center>

 <div class="table-responsive">  
<table>
	<tr style="font-family: Arial, Helvetica, sans-serif;">
		<th style="font-family: Arial, Helvetica, sans-serif;">ID</th>
		<th>Tipo de usuario</th>
		<th>Nombre</th>
		<th>Apellido Paterno</th>
		<th>Apellido Materno</th>
		<th>Telefono</th>
		<th>Correo</th>
		<th>Status</th>
	</tr> 
<?php	foreach($data as $usuarios){ ?>
		<tr style="font-family: Arial, Helvetica, sans-serif;">
		<td>{!! $usuarios->id !!}</td>
		<td>{!! $usuarios->tipo_usuarios->nombre !!}</td>
		<td>{!! $usuarios->nombre !!}</td>
		<td>{!! $usuarios->apellido_paterno !!}</td>
		<td>{!! $usuarios->apellido_materno !!}</td>
		<td>{!! $usuarios->telefono !!}</td>
		<td>{!! $usuarios->correo !!}</td>
		<td>{!! $usuarios->status !!}</td>	
	</tr>
	<?php } ?>
</table>

</div>
     </div>
                </div>
</body>