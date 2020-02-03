<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Procesador</title>
</head>
<h1>Tu mensaje ha sido recibido exitosamente muy pronto te responderemos.</h1>
<body>
<?php
//
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$personas = $_POST['personas'];
$evento = $_POST['evento'];
$día = $_POST['día'];
$mes = $_POST['mes'];
$año = $_POST['año'];
$lugar = $_POST['lugar'];

//Comienso de estructura de envio.

$mailsend = mail ('diego-08m@htomail.com', 'CONSULTA DE EVENTOS', "Nombre: $nombre\r\nApellido: $apellido\r\nTelefono: $telefono\r\nCorreo: $correo\r\nPersonas: $personas\r\nEvento: $evento\r\nDía: $día\r\nMes: $mes\r\nAño: $año\r\nLugar");

if ($mailsend){
	echo "<p>Buen día $nombre $apellido. Nos ha llegado su correo electronico, nos comunicaremos con usted los antes posible, Gracias por escribirnos...</p>";
	}
	
	else{
		echo "Lo sentimos su correo no fue enviado.";
		}
?>
</body>
</html>