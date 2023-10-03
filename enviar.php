<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];
$headers = "From: remitente@example.com\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



mail('gonzalezlautaro03@gmail.com','Contacto sobre mi sitio',$comentarios,$headers);

echo '

<p>Hola'.$nombre.'su mensaje:'.$mensaje.'se ha enviado correctamente </p>

';

?>
