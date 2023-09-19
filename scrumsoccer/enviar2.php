<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['correo'];
$descripcion = $_POST['descripcion'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['descripcion'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'carlos.quirogag@cun.edu.co';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>