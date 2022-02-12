<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Detalle</title>
</head>
<body>
<h1>Detalle</h1>
<h2>Nombre:{!! $tipo_usuarios->nombre !!}</h2>
<h2>Status:{!! $tipo_usuarios->status !!}</h2>
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/tipo_usuarios') !!}">Regresar a la lista</a>
</body>
</html>