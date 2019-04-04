<?php
date_default_timezone_set("America/La_Paz");
header('content-type: text/html; charset: utf-8');
$hora=date("H:i:s");
$fecha=date("d/m/Y");
$ip=$_SERVER['REMOTE_ADDR'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$categoria = $_POST['categoria'];

$email_to = "lionfiresentinel@gmail.com";
$email_from = $_POST['correo'];
$subject = "Mensaje desde la web www: lionfiresecurity.com.bo";



$contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono. "\nServicio: " . $categoria."\n-----------------------\n"."\nFecha y Hora de Envío: ".$fecha."a las ".$hora."\n IP del Remitente: ".$ip;



if( mail($email_to, $subject, $contenido,$email_from)){
        echo "Su solicitud fue enviada correctamente, le responderemos en breve";
	   
    }
else{
        echo "Su solicitud no pudo ser enviada, intentelo de nuevo mas tarde";
    }
?>
