<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Crear</title>
</head>
<body>
<h1>Crear</h1>
{!!Form::open(['url'=>'/tipo_usuarios']) !!}
{!! Form::label('nombre','Nombre del tipo de usuario') !!}
{!! Form::text ('nombre',null,['placeholder'=>'Ingresa nombre del tipo de usuario']) !!}
<br />
<br />
{!! Form::label('status','Status') !!}
{!! Form::select ('status', array('1'=>'Activo','0'=>'Baja'),null,['placeholder'=>'Selecciona']) !!}
<br />
<br />
{!! Form::submit('Agregar Tipo de usuario') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!}">Regresar al menú</a>
<br />
<a href="{!! asset('/tipo_usuarios') !!}">Regresar a la lista</a>
</body>
</html>