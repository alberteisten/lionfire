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
	<script src="validar.js"></script>
  </head>

<body>
  <div class="preloader"></div>
  <?php
    include("include/cabecera.php")
  ?>

  <section class="sec-padding col-4 tp-pb50">
      <div class="container">
        <div class="sec-title text-center">
            <h2>Catálogo <span class="color-black-1"> de Productos</span></h2>
            <ul class="breadcumb">
                <li><a href="index.php">Inicio</a></li>
                <li><i class="fa fa-angle-right"></i></li>
                <li><span>Cctv</span></li>
            </ul>
            <span class="decor"><span class="inner"></span></span>

        </div>
        <div class="row services-iconbox">
               <div class="col-md-3 col-sm-6">
                   <div class="single-specialize">

                          <div class="col-md-12 hidden-md text-right">
                              <div class="imagen">
                              <a href="detalle_domos.php"><img src="img/resources/domo.jpg" alt="Awesome Image" />
                              </div>
                          </div>
                          <br>
                          <a href="detalle_domos.php"><h3>Domo</h3></a>

                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="single-specialize">
                     <div class="col-md-12 hidden-md text-right">
                            <div class="imagen">
                            <a href="detalle_balas.php"><img src="img/resources/bala.jpg" alt="Awesome Image" />
                            </div>
                     </div>
                      <br>
                      <a href="detalle_balas.php"><h3>Bala</h3></a>
                   </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="single-specialize">
                    <div class="col-md-12 hidden-md text-right">
                      <div class="imagen">
                      <a href="detalle_ptz.php"><img src="img/resources/ptz.jpg" alt="Awesome Image" />
                      </div>
                    </div>
                      <br>
                      <a href="detalle_ptz.php"><h3>Ptz</h3></a>

                  </div>
              </div>
              <div class="col-md-3 col-sm-6">
                  <div class="single-specialize">
                    <div class="col-md-12 hidden-md text-right">
                      <div class="imagen">
                      <a href="detalle_pez.php"><img src="img/resources/pez.jpg" alt="Awesome Image" />
                      </div>
                    </div>
                    <br>
                      <a href="detalle_pez.php"><h3>Pez</h3></a>
                    </div>
              </div>

          </div>
          <div class="row services-iconbox">
            <div class="col-md-3 col-sm-6">
                <div class="single-specialize">
                  <div class="col-md-12 hidden-md text-right">
                    <div class="imagen">
                    <a href="detalle_dvr.php"><img src="img/resources/dvr_nvr.jpg" alt="Awesome Image" />
                    </div>
                  </div>
                  <br>
                    <a href="detalle_dvr.php"><h3>Dvr_Nvr</h3></a>

                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-specialize">
                  <div class="col-md-12 hidden-md text-right">
                    <div class="imagen">
                    <a href="detalle_pantallas.php"><img src="img/resources/pantalla_touch.jpg" alt="Awesome Image" />
                    </div>
                  </div>
                  <br>
                    <a href="detalle_pantallas.php"><h3>pantalla_touch</h3></a>
                    </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-specialize">
                  <div class="col-md-12 hidden-md text-right">
                    <div class="imagen">
                    <a href="detalle_monitores.php"><img src="img/resources/monitor.jpg" alt="Awesome Image" />
                    </div>
                  </div>
                  <br>
                    <a href="detalle_monitores.php"><h3>Monitores</h3></a>

                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-specialize">
                  <div class="col-md-12 hidden-md text-right">
                    <div class="imagen">
                    <a href="detalle_accesorios_cctv.php"><img src="img/resources/accesorios_cctv.jpg" alt="Awesome Image" />
                    </div>
                  </div>
                  <br>
                    <a href="detalle_accesorios_cctv.php"><h3>Accesorios</h3></a>

                </div>
            </div>
          </div>
      </div>
  </section>


  <?php
  include("include\pie.php");
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
  <!-- revolution scripts -->
  <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
  <!-- thm custom script -->
  <script src="js/custom.js"></script>
  <script src="validar.js"></script>

</body>

</html>
