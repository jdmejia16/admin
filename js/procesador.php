<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contacto</title>
<style type="text/css">
p {
	font-family: arial black;
	font-size: 14px;
	font-weight: bold;
	color: black;
	text-decoration: none;
	text-align:center;
	margin-top: 100px;
}
</style>
</head>
<body>
<?php
//
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];


//Comienso de estructura de envio.

$mailsend = mail ('diego-08m@hotmail.com', 'Nuevo Mensaje', "Nombre: $nombre\r\nCorreo: $correo\r\nMensaje:  $mensaje\r\n");

if ($mailsend){
	echo "<p>Saludos $nombre. Me ha llegado su correo electronico, me comunicare con usted lo antes posible, Gracias por escribirme...</p>";
	}
	
	else{
		echo "Lo siento su correo no fue enviado.";
		}
?>
</body>
</html>