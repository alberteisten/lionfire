<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LionFire</title>
    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive stylesheet -->
    <link rel="stylesheet" href="css/theme-settings.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="logo.ico">
   
</head>

<body>
    <!-- Preloader -->
    <div class="preloader"></div>
    <?php
      include("include/cabecera.php")
    ?>
    <!-- /.mainmenu-area -->
       <section class="sec-padding contact-content appointment-content">
        <div class="container">
            <div class="title-box">
                <span>Es Facil y Rapido</span>
                <h3>Enviar una Solicitud de Cotización</h3>
                <p>LLene los siguientes datos para solicitar su cotización.</p>
            </div>
               <form action="enviarcotizacion.php" method="post" onsubmit="return val();" class="contact-form">   
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-6">
                           
                            <input type="text" id="nombre1" name="nombre" placeholder="Nombre Completo" required>
                            <input type="mail" id="correo1" name="correo" placeholder="Correo al que se enviara su cotización" required>
                            <input type="text" id="celular1" name="celular" placeholder="Celular" required>
                            <div class="select-input-wrapper">
                                <select class="select-input" name="servicio">
                                    <option value="" selected="selected">Servicio Requerido</option>
                                    <option value="vigilancia">Sistemas de Vigilancia</option>
                                    <option value="seguridad">Sistemas de Seguridad</option>
                                    <option value="acceso">Controles de Acceso</option>
                                    <option value="asistencia">Controles de Asistencia</option>
                                    <option value="otros">Otros</option>
                                </select>
                            </div>
                            <!--<input type="text" placeholder="Seleccione la fecha de hoy" name="date" class="date-picker">-->
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="empresa1" name="empresa" placeholder="Nombre de la Empresa">
                            <input type="text" id="telefono1" name="telefono" placeholder="Teléfono de la Empresa">
                            <input type="text" id="direccion" name="direccion" placeholder="Dirección de la Empresa">

                            <div class="select-input-wrapper">
                                <select class="select-input" name="categoria_marca">
                                   <option value="" selected="selected">Marca de preferencia</option>
                                   <option value="dahua">Dahua</option>
                                            <option value="vicom">Vicom</option>
                                            <option value="paradox">Paradox</option>
                                            <option value="honeywell">Honeywell</option>
                                            <option value="hytera">Hytera</option>
                                            <option value="ubiquiti">Ubiquiti</option>
                                            <option value="tplink">TP-Link</option>
                                            <option value="hikvision">Hikvision</option>
                                            <option value="OtrosM">Otros</option>
                                </select>
                            </div>
                     
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    
                    <textarea type="text" id="mensaje" name="mensaje" placeholder="Mensaje" cols="30" rows="10"></textarea>
                </div>
                <div class="col-md-12">
                <center> <button type="submit">Enviar</button> </center>
                                
                </div>
            </form>
        </div>
    </section>

<?php
include("include/branding.php");          
include("include/pie.php")
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
    <!--validacion-->
    <script src="val.js"></script>
    <script src="validar.js"></script>
  </body>

</html>
