
<?php

$destino = "lionfiresentinel@gmail.com";
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$opcion1 = $_POST['opcion1'];
$opcion2 = $_POST['opcion2'];

$contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono " . $telefono . "\nMe Interesa proteger: " . $opcion1."\nKit que desea: ".$opcion2;

mail($destino,'Promociones',$contenido);

//header("Location:gracias.html");


if ( $opcion2=='camaras' ) { ?>
<center><h1><a href="doc/kit_cctv.pdf" target="_blank">DESCARGAR</h1></center>

<?php }

if ( $opcion2=='seguridad' ) { ?>
<center><h1><a href="doc/kit_alarma.pdf" target="_blank">DESCARGAR</h1></center>
<?php }

if ( $opcion2=='asistencia' || $opcion2=='acceso') { ?>
<center><h1><a href="doc/kit_control.pdf" target="_blank">DESCARGAR</h1></center>
<?php }

 ?>

