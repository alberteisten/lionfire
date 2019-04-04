<?php

$destino = "albertovallejossirpa@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$email_to = "lionfiresentinel@gmail.com";
$email_from = $_POST['correo'];
$subject = "Mensaje desde la web www: lionfiresecurity.com.bo";

$contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTelefono " . $telefono . "\nMensaje: " . $mensaje;
//echo $contenido;


if( mail($email_to, $subject, $contenido,$email_from)){
        echo "Su solicitud fue enviada correctamente, le responderemos en breve";
	   
    }
else{
        echo "Su solicitud no pudo ser enviada, intentelo de nuevo mas tarde";
    }
?>



