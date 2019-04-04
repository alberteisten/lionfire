<!DOCTYPE html>
<html lang="es">
    <head>

        <meta charset="UTF-8">
        <title>LionFire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/theme-settings.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="icon" type="image/x-icon" href="logo.ico">
        <link rel="stylesheet" href="css/estilos.css">
        <script src="valida.js"> </script>
         <script src="validar.js"></script>
    </head>
    <body>

    <div class="preloader"></div>
    <?php
      include("include/cabecera.php")
    ?>



  <section class="blog-home sec-padding">
    <div class="heading">
        <h3>PAQUETES DE PROMOCIÓN</h3>
    </div>
    <div class="detalle-arriba">
      <h4> ¡Déjanos tus datos y accede a nuestros Paquetes Promocionales!</br>
            Sistemas de Seguridad hechos para proteger tu patrimonio. Tranquilidad para tus seres queridos. </h4>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6">
   <form action="enviarcorreopaquetes.php" method="post" onsubmit="return valida();">
        <h2> CONTACTO</h2>
        <input type="text" id="nombre1" name="nombre" placeholder="Nombre" required>
        <input type="email" id="correo1" name="correo"  placeholder="Correo" required>
        <input type="text" id="telefono1" name="telefono" placeholder="Telefono"  required>
           <div class="col-md-6 col-sm-6">
           <label for="">Me Interesa Proteger:</label>
           <select name="opcion1"id="op1">
           <option value="casa">Casa</option>
           <option value="oficina">Oficina</option>
           <option value="empresa">Empresa</option>
           <option value="institucion">Institución</option>
           <option value="otro">Otro</option>
           </select>
		   </div>
           <div class="col-md-6 col-sm-6">
           <label for="">Que Kit Desea:</label>
           <select name="opcion2"id="op2">
           <option value="camaras">Cámaras</option>
           <option value="camaras">Alarmas</option>
           <option value="camaras">Biometricos</option>
           <!--<option value="seguridad">Seguridad</option>
           <option value="asistencia">Asistencia</option>
           <option value="acceso">Acceso</option>-->
           <!--<option value="otro">Otro</option>-->
           </select>
		   </div>
           <button type="submit" value="DESCARGAR" id="boton">Descargar</button>
          <!--<input type="submit" value="descarga" href="doc/kit_cctv.pdf">-->
   </form>

      </div>
      <div class="col-md-6 col-sm-6">
      <img src="img/resources/promocion.jpg" alt="Awesome Image" />
      </div>
  </div>
   </section>

     <?php
       include("include\branding.php");
       include("include\pie.php")
     ?>
     <!-- main jQuery -->
     <script src="js/jquery-1.11.1.min.js"></script>
     <!-- bootstrap -->
     <script src="js/bootstrap.min.js"></script>
     <!-- bx slider -->
     <script src="js/jquery.bxslider.min.js"></script>
     <!-- appear js -->
     <script src="js/jquery.appear.js"></script>
     <!-- count to -->
     <script src="js/jquery.countTo.js"></script>
     <!-- owl carousel -->
     <script src="js/owl.carousel.min.js"></script>
     <!-- validate -->
     <script src="js/validate.js"></script>
     <!-- mixit up -->
     <script src="js/jquery.mixitup.min.js"></script>
     <!-- fancybox -->
     <script src="js/jquery.fancybox.pack.js"></script>
     <!-- easing -->
     <script src="js/jquery.easing.min.js"></script>
     <!-- isotope script -->
     <script src="js/isotope.pkgd.min.js"></script>
     <!-- jQuery ui js -->
     <script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
     <!-- thm custom script -->
     <script src="js/custom.js"></script>
      <script src="validar.js"></script>
    </body>


</html>
