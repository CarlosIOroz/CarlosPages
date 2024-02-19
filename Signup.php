<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Residencia</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="imagenes/fevicon.png" type="imagen/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="Ejercicios.php">Ejercicios</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="Informacion.php">Informacion</a>
                  </li>

               </ul>
               
               <div class="search_icon"><a href="Login.php"><img src="imagenes/user-icon.png"><span class="padding_left_15">login</span></a></div>
               
            </div>
         </nav>
      </div>
      <section class="container forms">
        <div class="form login">
         <div class="form-content">
            <header>Signup/Inscribirse</header>
            <form action="php/Signup_be.php" method="POST">
               <div class="field input-field">
                  <input name="name" type="text" placeholder="Nombre" class="input">
              </div>
                <div class="field input-field">
                    <input name="email" type="emai" placeholder="Email" class="input">
                </div>
                <div class="field input-field">
                    <input name="password" type="password" placeholder="Crear contraseña" class="password">
                </div>
                <div class="field input-field">
                    <input name="confirmPassword" type="password" placeholder="Confirmar contraseña" class="password">
                    <i class='bx bx-hide eye-icon'></i>
                </div>
                <div class="field button-field">
                    <button type="submit">Signup/Inscribirse</button>
                </div>
            </form>
            <div class="form-link">
                <span>Ya tienes una cuenta? <a href="Login.php" >Login/Acceso</a></span>
            </div>
        </div>

        </div>
    </section>
<script src="verificacion.js"></script>

     <!-- JavaScript -->
     <script src="script.js"></script>     
      <!-- cooming  section end -->
      <!-- footer  section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_menu">
               <ul>
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="Ejercicios.php">Ejercicios</a></li>
                  <li><a href="Informacion.php">Informacion</a></li>
                  <li><a href="Login.php">Login</a></li>
                  <li><a href="#"></a></li>
                  <li><a href="#"></a></li>
               </ul>
            </div>
            <div class="social_icon">
               <ul>
                  <li><a href="#"><img src="imagenes/fb-icon.png"></a></li>
                  <li><a href="#"><img src="imagenes/twitter-icon.png"></a></li>
                  <li><a href="#"><img src="imagenes/linkedin-icon.png"></a></li>
                  <li><a href="#"><img src="imagenes/instagram-icon.png"></a></li>
               </ul>
            </div>
         </div>
      </div>
      
     
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Free html Templates</a></div>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
     
   </body>
</html>