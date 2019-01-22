 <?php

 
include "class.phpmailer.php";
include "PHPMailerAutoload.php";
include "class.smtp.php";

$phpmailer = new PHPMailer();
// ---------- datos de la cuenta de Gmail -------------------------------
 
$phpmailer->Username = 'p029846@gmail.com';                 // Usuario SMTP
$phpmailer->Password = '3314089532.bet';   
//-----------------------------------------------------------------------
// $phpmailer->SMTPDebug = 1;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Host = "smtp.gmail.com"; // GMail
$phpmailer->Port = 465;
$phpmailer->IsSMTP(); // use SMTP
$phpmailer->SMTPAuth = true;
$phpmailer->setFrom('p029846@gmail.com', 'Carnes Frias ');
$phpmailer->addAddress('betza1697@gmail.com', 'Betzaira');
$phpmailer->Subject = 'Prueba phpmailer';	
$phpmailer->Body .="<h1 style='color:#3498db;'>Hola Mundo!</h1>";
$phpmailer->Body .= "<p>Mensaje personalizado</p>";
$phpmailer->Body .= "<p>Fecha y Hora: ".date("d-m-Y h:i:s")."</p>";
$phpmailer->IsHTML(true);
//$phpmailer->Send();

$resultado = $phpmailer->Send();

// Envía el correo.
if($resultado){ 
	echo 'El correo fue enviado correctamente.'; 
}
else{ 
	echo 'Hubo un problema. Contacta a un administrador.';
	 }

 /*
require ("class.phpmailer.php");
require ("class.smtp.php");
 
$mail = new PHPMailer();
 
$mail->SMTPDebug = 3;                               // Activar debug
 
$mail->IsSMTP();                                      // Set método de transporte a SMTP
$mail->Host = 'smtp.gmail.com';  // Especificar servidor SMTP principal y de backup
$mail->SMTPAuth = true;                               // Activar autenticación SMTP
$mail->Username = 'p029846@gmail.com';                 // Usuario SMTP
$mail->Password = '3314089532.bet';                           // Clave SMTP
$mail->SMTPSecure = 'tls';                            // Activa encriptado TLS
$mail->Port = 587;                                    // Indicar puerto de conexión
 
$mail->setFrom('p029846@gmail.com', 'Carnes Frias ');
$mail->addAddress('betza1697@gamail.com', 'Betzaira');     // Agregar destinatario

 
$mail->isHTML(true);                                  // Indicar que el mensaje de correo es en formato HTML
 
$mail->Subject = 'Prueba phpmailer';
$mail->Body    = 'Correo electrónico con <b>phpmailer!</b>';
$mail->AltBody = 'Texto para clientes de correo electrónico sin soporte HTML';
 
$resultado = $mail->send();

// Envía el correo.
if($resultado){ 
	echo 'El correo fue enviado correctamente.'; 
}
else{ 
	echo 'Hubo un problema. Contacta a un administrador.';
	 } 
	 */
 ?>
