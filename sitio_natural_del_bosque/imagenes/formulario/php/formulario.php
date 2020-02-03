<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario</title>
</head>
<body>
<?php
$mensaje= "Mensaje de Bienvenida a\n a todos";
$cabecera = "From: JDmejia <diego-08m@hotmail.com>\r\n";
$cabecera.= "Cc: diego-08m@hotmail.com, jdmejia16@outlook.es\r\n";
$cabecera.= "Bcc: jdmejia16@outlook.es\r\n";

if(mail("diego-08m@hotmail.com", "Bienvenidos", $mensaje, $cabecera)){
	echo "Mensaje enviado exitosamente";
}
else{
	echo "Error al enviar el mensaje";
}
?>
</body>
</html>
