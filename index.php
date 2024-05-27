<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lanzamiento | Bet4Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">


  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/logo.ico">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

 
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div id="logo" class="me-auto">
          <a href="index.php"><img src="assets/img/163x51_bet_amarillo.png" alt=""></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

     
    </div>
  </header><!-- End Header -->

  <main id="main">
      
       <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-title">Formulario de reserva</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="bi bi-geo-alt"></i>
                <p>Apoquindo #3200 piso 5<br>Las Condes, Santiago</p>
              </div>

              <div>
                <i class="bi bi-envelope"></i>
                <p>lanzamiento@bet4home.com</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
                <form action="create.php" method="POST">
                <div class="form-group">
                    <label class="form-label">Nombre y apellido  <span class="text-danger">*</span></label>
                  <input type="text" name="nombre" class="form-control" id="name" required>
                </div>
                    

                <div class="form-group mt-3">
                    <label class="form-label">RUT sin puntos ni guión <span class="text-danger">*</span></label>
                    <input type="text" class="form-control rut" name="rut" id="rut" required>
                </div>
                  
                   
                <div class="form-group mt-3">
                    <label class="form-label">Correo <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="email" id="email" required>
                </div>
                  
                   <div class="form-group mt-3">
                       <label class="form-label">Número de WhatsApp<span class="text-danger">*</span></label><br>
                       <label class="form-label">+569</label><br>
                       <input type="tel" class="form-control" name="telefono" id="phone" >

                </div>
                  
                  <div class="form-group mt-3">
                    <label class="form-label">Unidades a reservar (máximo 2) <span class="text-danger">*</span></label>
                    
                    <input type="number" class="form-control" name="unidades_reservadas" id="reservas" min="1" max="2" required>
                </div>
                  
                  
                <div class="my-3">
                  
                </div>
                <div class="text-center"><button class="btn bsb-btn-xl btn-primary"  type="submit">Reservar</button></div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Contact Section -->

  

   
    <!-- ======= Features Section ======= -->
    <section class="features" id="features">

      <div class="container">
        <h2 class="text-center">
          Pasos a seguir
        </h2>

        <div class="row">
          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <i class="bi bi-card-list"></i>
                </div>
              </div>

              <div>
                <h3>
                  1
                </h3>

                <p>
                  Rellena nuestro formulario y paga tu reserva.
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <i class="bi bi-phone-vibrate"></i>
                </div>
              </div>

              <div>
                <h3>
                  2
                </h3>

                <p>
                  Nos contactaremos contigo vía telefónica para confirmar tus datos y agendar una videollamada en donde elegirás tu unidad.
                </p>
              </div>
            </div>
          </div>

          <div class="feature-col col-lg-4 col-xs-12">
            <div class="card card-block text-center">
              <div>
                <div class="feature-icon">
                  <i class="bi bi-envelope-check"></i>
                </div>
              </div>

              <div>
                <h3>
                  3
                </h3>

                <p>
                  Si necesitas ayuda escríbenos a lanzamiento@bet4home.com
 
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- End Features Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-start text-center">
            <p class="copyright-text">
              &copy; Copyright <strong>Bet4Home</strong>. Todos los derechos reservados.
            </p>
            
          </div>

   
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
   <script   src="https://code.jquery.com/jquery-3.7.1.min.js"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"></script>
       <script src="jquery.rut.js"></script>  
       <script>$('.rut').rut();</script>

</body>

</html>