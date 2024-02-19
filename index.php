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
    <style>
      
      /* Estilo para colocar los contenedores como bloques */
      .contenedor {
        display: block;
        margin-bottom: 20px; /* Espacio entre cada par de imagen y descripción */
      }
          /* Estilo para separar las imágenes y los campos de descripción */
          .contenedor-imagen {
            margin-bottom: 20px; /* Espacio entre las imágenes */
          }
          .contenedor-descripcion {
            margin-bottom: 10px; /* Espacio entre los campos de descripción */
            display: block; /* Cambiar el span a un bloque */
            text-align: justify;
            
                
                color: #ffffff;
                
                font-size: 35px; /* Tamaño de fuente aumentado */
            
          }
          /* Estilo para colocar los elementos en línea */
         .contenedor-imagen, .contenedor-descripcion {
          display: inline-block;
          margin-right: 10px;
          margin-left: 30px;
          margin-top: 40px;
          vertical-align: top; /* Alineación superior */
          }
          .button {
            font-size: 26px;
            padding: 10px 20px;
            margin: 20px auto; /* Margen superior e inferior de 20px, centrado horizontalmente */
            cursor: pointer;
            background-color: #d89510; /* Color de fondo */
            color: white;
            border: none;
            border-radius: 3px;
            margin-left: 700px;
        }
          
    
        </style>
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
    </body>
    <div class="banner_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="banner_taital">El saber es la llave que abre las puertas de la mente, ejercítala con constancia para alcanzar la sabiduría</div>
               
            </div>
            
           
            
            
         </div>
      </div>
   </div>
   <!-- arrival section start -->
   
 <!-- Primer par de imagen y descripción -->
<div class="contenedor">
   <div class="contenedor-imagen">
     <img src="imagenes/a person thinking drawing.jpg" alt="Descripción de la imagen" width="300" height="200">
   </div>
   <div class="contenedor-descripcion">
      <span>"La mente es el arma más poderosa que poseemos; afila su filo con <br>el constante ejercicio del pensamiento  crítico y la reflexión profunda."</span><br>
    </div>
 </div>
 
 <!-- Segundo par de imagen y descripción -->
 <div class="contenedor">
   <div class="contenedor-imagen">
     <img src="imagenes/a person thinking an idea.jpg" alt="Descripción de la imagen" width="300" height="200">
   </div>
   <div class="contenedor-descripcion">
      <span>"Al realizar actividades que requieren concentración y atención, se <br>mejora la capacidad de enfocarse en una tarea específica, lo que<br> puede beneficiar la capacidad para retener información."</span><br>
    </div>
   
 </div>
 <!-- Tercer par de imagen y descripción -->
 <div class="contenedor">
   <div class="contenedor-imagen">
     <img src="imagenes/a person thinking an idea (1).jpg" alt="Descripción de la imagen" width="300" height="200">
   </div>
   <div class="contenedor-descripcion">
      <span>"La mente es como un cajón, cuanto más la ejercitas, más cosas <br>puedes recordar."</span><br>
    </div>
   
 </div>
 <!-- Cuarto par de imagen y descripción -->
 <div class="contenedor">
   <div class="contenedor-imagen">
     <img src="imagenes/a person thinking an idea (3).jpg" alt="Descripción de la imagen" width="300" height="200">
   </div>
   <div class="contenedor-descripcion">
      <span>"La memoria es el archivo del alma, ejercítala con sabiduría para<br> que nunca te falle."</span><br>
    </div>
   
 </div>
 <!-- Quinto par de imagen y descripción -->
 <div class="contenedor">
   <div class="contenedor-imagen">
     <img src="imagenes/a person thinking an idea (2).jpg" alt="Descripción de la imagen" width="300" height="200">
   </div>
   <div class="contenedor-descripcion">
      <span>"Realizar actividades que desafíen la mente y proporcionen un <br>sentido de logro puede tener un impacto positivo en el estado <br>de ánimo y la autoestima."</span><br>
    </div>
   
 </div>
 <!-- arrival section end -->
 
 
 <button class="button" onclick="window.location.href = 'Ejercicios.php'">Ver Ejercicios</button>

      
                  
      
                     
  
<!-- movies section end -->

<!-- footer  section start -->
<div class="footer_section layout_padding">
   <div class="container">
      <div class="footer_menu">
         <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Ejercicios.php">Ejercicios</a></li>
            <li><a href="Informacion.php">informacion</a></li>
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




</html>