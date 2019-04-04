<?php

//$destino = "albertovallejossirpa@gmail.com";
date_default_timezone_set("America/La_Paz");
header('content-type: text/html; charset: utf-8');
$hora=date("H:i:s");
$fecha=date("d/m/Y");
$ip=$_SERVER['REMOTE_ADDR'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$servicio = $_POST['servicio'];
$empresa = $_POST['empresa'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$categoria_marca = $_POST['categoria_marca'];
$mensaje = $_POST['mensaje'];

$email_to = "lionfiresentinel@gmail.com";
$email_from = $_POST['correo'];
$subject = "Mensaje desde la web www: lionfiresecurity.com.bo";



$contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nCelular: " . $celular. "\nServicio: " . $servicio
            . "\nEmpresa: " . $empresa . "\nTelefono-Empresa: " . $telefono . "\nDirección: " . $direccion . "\nMarca: " . $categoria_marca . "\nMensaje: " . $mensaje."\n-----------------------\n"."\nFecha y Hora de Envío: ".$fecha."a las ".$hora."\n IP del Remitente: ".$ip;


if( mail($email_to, $subject, $contenido,$email_from)){
        echo "Su solicitud fue enviada correctamente, le responderemos en breve";
    }
else{
        echo "Su solicitud no pudo ser enviada, intentelo de nuevo mas tarde";
    }



//mail($destino,'Contacto',$contenido);


?>
