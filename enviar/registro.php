<!Doctype html>
<html lang="es">
<header>
    <title>Enviar</title>
    <meta charsert="UTF-8">
</header>
<style>
    p{
        font-family:verdana;
        font-size:1em;
        color:black;
        text-shadow:0.05em 0.01em white;
        text-align:center;
        margin-top:5%;
    }
     a{
        font-family:verdana;
        font-size:1em;
        color:red;
        text-shadow:0.05em 0.01em white;
        text-align:center;
        margin-top:5%;
        text-decoration: none;
    }
</style>
<style>
img[src*="https://cdn.rawgit.com/000webhost/logo/e9bd13f7/footer-powered-by-000webhost-white2.png"] {
    display: none;
}
</style>
<body>
<?php
	//conectar con el servidor
    $conectar=mysqli_connect("localhost","u554103017_juan","Guatemala1821");
    //verificar coneccion
    if(!$conectar){
        echo"<p>No se pudo conectar con el servidor</p>";
    }else{
       
        $base=mysqli_select_db($conectar, "u554103017_form");
        if(!$base){
            echo "<p>No se encontro la base de datos.</p>";
        }
    }
	//variables
	$nombre_ = $_POST['nombre_'];
	$apellido_ = $_POST['apellido_'];
	$telefono_ = $_POST['telefono_'];
	$correo_ = $_POST['correo_'];
	$opcion_ = $_POST['opcion_'];
	$genero_ = $_POST['genero_'];
	$estudio_ = $_POST['estudio_'];
	$mensaje_ = $_POST['mensaje_'];
	//sentencia sql
    $sql = "INSERT INTO registro VALUES ('$nombre_','$apellido_','$telefono_','$correo_','$opcion_','$genero_','$estudio_','$mensaje_')";
	//ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conectar, $sql);
    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"<p>Hubo algún error</p>";
    }else{
        echo"<p>Los datos se han guardado correctamente <br><a href='index.html'>volver</a></p>";
    }
?>
</body>
</html>