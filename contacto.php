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
    <script src="valida.js"> </script>
    <script src="validar.js"></script>

  </head>

<body>
    <!-- Preloader -->
    <div class="preloader"></div>

    <?php
      include("include/cabecera.php")
    ?>

    <!-- /.mainmenu-area -->
    <section class="inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 sec-title colored text-center">
                    <h2>Contacto</h2>
                    <ul class="breadcumb">
                        <li><a href="index.php">Inicio</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li><span>Contactenos</span></li>
                    </ul>
                    <span class="decor"><span class="inner"></span></span>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-content sec-padding">
        <div class="container">
            <div class="sec-title-co">
                <p class="parrafo-color">¿Es tu primer contacto?
                    Con gusto te atenderemos, para asesorarte a encontrar  la mejores soluciones electronicas  para tu propiedad, negocio o empresa.
                </p>
            </div>
            <div class="row">
              <div class="col-md-4">
                <div class="single-header-info">

                  <h2>Nos Encontramos</h2>
                  <ul class="contact-info" style="font-size:2vh;">
                      <li>
                          <div class="icon-box">
                              <div class="inner">
                                  <i class="fa fa-map-marker"></i>
                              </div>
                          </div>
                          <div class="content-box">
                              <h4>Dirección</h4>
                              <p>Calle Murillo Nro 1028
                                 Edificio Centro Comercial Peatonal</p>
                          </div>
                      </li>
                      <li>
                          <div class="icon-box">
                              <div class="inner">
                                  <i class="fa fa-phone"></i>
                              </div>
                          </div>
                          <div class="content-box">
                              <h4>Telefono</h4>
                              <p>(+591) 72524958</p>
                          </div>
                      </li>
                      <li>

                          <div class="icon-box">
                              <div class="inner">
                                  <i class="fa fa-envelope-o"></i>
                              </div>
                          </div>
                          <div class="content-box">
                              <h4>Correo</h4>
                              <p>lionfiresecurity@hotmail.com</p>
                              <p>lionfiresentinel@gmail.com</p>
                          </div>

                      </li>
                  </ul>
              </div>

              </div>
              <div class="col-md-8">
                    <h2>Formulario de Contacto</h2>
                    <form action="enviarcorreo.php" method="post" onsubmit="return valida();" class="contact-form row">
                        <div class="col-md-6">
                            <input type="text" id="nombre1" name="nombre" placeholder="Nombre" required>
                            <input type="email" id="correo1" name="correo" placeholder="Correo" required>
                            <input type="text" id="telefono1" name="telefono" placeholder="Télefono" required>
                        </div>
                        <div class="col-md-6">
                            <textarea name="mensaje" placeholder="Mensaje" cols="30" rows="10"></textarea>
                        </div>
                        <div class="col-md-12">
                           <center> <button type="submit">Enviar</button></center>
                        </div>
                    </form>
                </div>

            </div>
            <div class="row">

                <div class="col-lg-12 col-md-12">
                  <div class="embed-container">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1QPDQVNvCBKkR1SmiVm0jGlZXsyc&hl=es-419" height="300" width="600"></iframe>
                  </div>
                </div>

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
    <!-- gmap helper -->
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <!-- gmap main script -->
    <script src="js/gmap.js"></script>
    <!-- isotope script -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- jQuery ui js -->
    <script src="js/jquery-ui-1.11.4/jquery-ui.js"></script>
    <!-- thm custom script -->
    <script src="js/custom.js"></script>
    <script src="validar.js"></script>
</body>

</html>
