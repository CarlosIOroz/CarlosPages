<?php
   session_start();

   if(!isset($_SESSION["usuario"])){
      echo '
         <script>
            alert("Porfavor debes iniciar sesión");
            window.location = "Login.php";
         </script>
      ';
      session_destroy();
      die();
   }   
?>
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
       <link rel="icon" href="imagenes/imagenes/fevicon.png" type="imagen/gif" />
       <!-- Scrollbar Custom CSS -->
       <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
       <!-- Tweaks for older IEs-->
      
       <!-- owl stylesheets --> 
       <link rel="stylesheet" href="css/owl.carousel.min.css">
       <link rel="stylesheet" href="css/owl.theme.default.min.css">
    </head>
    <body>
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
                    <a class="nav-link" href="informacion.php">Información</a>
                 </li>

              </ul>
              
              <div class="search_icon"><a href="php/cerrar_sesion.php"><img src="imagenes/user-icon.png"><span class="padding_left_15">Cerrar Sesión</span></a></div>
             
           </div>
        </nav>
      </div>
      <!-- header section end -->
      <!-- movies section start -->
      <div class="ejercicios_section layout_padding">
         <div class="container">
            
            <div class="ejercicios_section_2 layout_padding">
               <h1 class="letest_text">Ejercicios nuevos</h1>
               
               <div class="movies_main">
                  <div class="juegos_main">
                     <div class="juegos">
                        <div class="imagen_3">
                           <img src="imagenes/Ejercicio1imagen.jpg" class="imagen" style="width:100%">
                           <div class="middle">

                              <a href="Ejercicio1.php">
                                 <button class="playnow_bt">Iniciar</button>
                              </a>

                           </div>
                        </div>
                        <h1 class="code_text">Recordar <br>el número </h1>
                        <p class="there_text">La descripción del ejercicio de Recordar el número   está diseñada  para que se memorice  una secuencia de números y luego respondas  qué números había  , a medida que va aumentando  la dificultad  va aumentando los números que  debes de memorizar.</p>
                        
                     </div>
                     <div class="juegos">
                        <div class="imagen_3">
                           <img src="imagenes/Ejercicio2imagen.jpg" class="imagen" style="width:100%">
                           <div class="middle">
                              <a href="Ejercicio2.php">
                                 <button class="playnow_bt">Iniciar</button>
                              </a>
                           </div>
                        </div>
                        <h1 class="code_text">Recordar <br>la figura</h1>
                        <p class="there_text">La descripción del 
                           ejercicio de Recordar la  
                           figura trata de  recordar
                             la figura que se va 
                           mostrando  y plasmar la figura 
                            que se mostró,
                           mientras avanzas va ha aumentado 
                           la dificultad 
                           agregando figuras más grandes 
                           y complicadas. </p>
                        

                        
                     </div>
                     <div class="juegos">
                        <div class="imagen_3">
                           <img src="imagenes/portada.jpg" class="imagen" style="width:100%">
                           <div class="middle">
                              <a href="Ejercicio3.php">
                                  <div class="playnow_bt">Iniciar</div>
                              </a>
                          </div>

                           
                        </div>
                        <h1 class="code_text">Memorizar secuencia</h1>
                        <p class="there_text"> Descripción del ejercicio de Memorizar secuencias , está diseñado  para que se memorice la secuencia de los cuadrados que se están iluminando  a medida que avance el juego va a aumentado el número de secuencias que se debe memorizar.  </p>
                        
                     </div>
                     <div class="juegos">
                        <div class="imagen_3">
                           <img src="imagenes/portadajuego4.jpg" class="imagen" style="width:100%">
                           <div class="middle">
                              <a href="Ejercicio4.php">
                                  <div class="playnow_bt">Iniciar</div>
                              </a>
                          </div>

                           
                        </div>
                        <h1 class="code_text">Memorizar animales de granja</h1>
                        <p class="there_text"> 
                        La descripción del 
                        ejercicio de Memorizar 
                        animales se trata  
                        de memorizar la cantidad 
                        de  animales de la
                        granja  que van apareciendo  
                        y responder antes que se acabe el 
                        tiempo límite.</p>
                        
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      <!-- movies section end -->
      <!-- footer  section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_menu">
               <ul>
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="Ejercicios.php">Ejercicios</a></li>
                  <li><a href="informacion.php">Informacion</a></li>
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
      <!-- footer  section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Equipo Residencia</a></div>
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