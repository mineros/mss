<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Recuperación de contraseña</h2>

		<div>
			Para recuperar tu contraseña, accede a la siguiente página: {{ URL::to('password/reset', array($token)) }}.
		</div>
	</body>
</html>