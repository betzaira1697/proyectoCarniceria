<?php  

// Llamando a los campos
$nombre = $_POST['este es un correo de prueba'];
$correo = $_POST['betza1697@gmail.com'];

$mensaje = $_POST['correo de prueba'];

$destinatario = "p029846@gmail.com";
// Datos para el correo
$asunto = "Contacto desde nuestra web";

$carta = "De: nk \n";
$carta .= "Correo: p029846@gmail.com \n";

$carta .= "Mensaje: esto es prueba";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje-de-envio.html');

?>