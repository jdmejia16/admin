<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplicacion</title>
</head>
<body>
<?php
$mail="diego-08m@hotmail.com";
$nombre = $_POST["nombre"];
$pais = $_POST["pais"];
$email = $_POST["email"];
$mensaje = $_POST["mensaje"];
$thank="gracias.html";
$message = "
nombre:".$nombre."
pais:".$pais."
email:".$email."
mensaje:".$mensaje."";
if (mail ($email , "formulario", $message)) Header ("location: $thank");
?>
</body>
</html>