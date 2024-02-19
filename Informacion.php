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
    max-width: 60%; /* Limitar el ancho del texto para mantenerlo junto a la imagen */
    margin-bottom: 10px; /* Espacio entre los campos de descripción */
    display: inline-block; /* Cambiar el span a un bloque */
    text-align: justify;
    color: #ffffff;
    font-size: 30px; /* Tamaño de fuente aumentado */
   

}



/* Estilo para colocar los elementos en línea */
.contenedor-imagen, .contenedor-descripcion {
    display: inline-block;
    vertical-align: top; /* Alineación superior */
    margin-right: 20px; /* Espacio entre la imagen y la descripción */
    margin-left: 30px;
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
/* Estilo CSS para cambiar el tamaño, color, margen izquierdo y justificar el texto dentro de los elementos <p> */
p {
            font-size: 30px; /* Tamaño del texto */
            color: #ffffff; /* Color del texto */
            margin-right: 100px; 
            text-align: justify; /* Justificar el texto */
            margin-left: 100px; /* Margen izquierdo */
            line-height: 1.5; /* Interlineado */
}
.titulo {
            font-size: 60px; /* Tamaño del texto */
            color: #ffffff; /* Color del texto */
            margin-right: 50px;  /* Margen derecho */
            text-align: center; /* Justificar el texto */
            margin-left: 50px; /* Margen izquierdo */
            margin-top: 50px; /* Puedes ajustar el valor según sea necesario */
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
    <h1 class="titulo"> “Sistema web para el entrenamiento<br> de las funciones cognitivas

y memoria a corto plazo”</h1>
    <p>El entrenamiento de la memoria ha sido un área de interés constante en la
      investigación científica y la práctica clínica. A lo largo de los años, numerosos estudios
      han demostrado que es posible mejorar y ejercitar la memoria a través de técnicas y
      ejercicios adecuados. Este proyecto se basa en la sólida base de conocimientos que
        ha surgido de estos estudios y tiene como objetivo desarrollar un sistema innovador
       para mejorar la memoria mediante la integración y adaptación de ejercicios
       respaldados por investigaciones.</p><br><br>
   <!-- arrival section start -->
   
 <!-- Primer par de imagen y descripción -->
<div class="contenedor">
   <div class="contenedor-imagen">
     <img src="imagenes/Ejercicio1imagen.jpg" alt="Descripción de la imagen" width="300" height="200">
   </div>
   <div class="contenedor-descripcion">
      
      <span>El ejercicio de Recordar el número : Este tipo de ejercicio proporciona estimulación cognitiva al desafiar tu capacidad de atención y concentración. Al aumentar gradualmente la dificultad, estás ejercitando tu mente y ayudando a mantenerla activa y ágil.</span><br>
    </div>
 </div>
 
 <!-- Segundo par de imagen y descripción -->
 <div class="contenedor">
   <div class="contenedor-imagen">
     <img src="imagenes/Ejercicio2imagen.jpg" alt="Descripción de la imagen" width="300" height="200">
   </div>
   <div class="contenedor-descripcion">
      <span> El ejercicio de Recuerda la figura : Al recordar figuras que aumentan en complejidad, estás ejercitando tu capacidad para procesar y retener información visual y espacial. Esto puede fortalecer tu habilidad para reconocer patrones, formas y detalles, lo cual es importante para muchas tareas cognitivas.</span><br>
    </div>
   
 </div>
 <!-- Tercer par de imagen y descripción -->
 <div class="contenedor">
   <div class="contenedor-imagen">
     <img src="imagenes/portada.jpg" alt="Descripción de la imagen" width="300" height="200">
   </div>
   <div class="contenedor-descripcion">
      <span>El ejercicio de Memorizar secuencias : Este tipo de ejercicio requiere que recuerdes y mantengas activamente una secuencia de elementos en tu mente mientras avanzas en la tarea. A medida que la dificultad aumenta y se agregan más secuencias, estás desafiando y ejercitando tu capacidad de retención de información a corto plazo.</span><br>
    </div>
   
 </div>
 <!-- Cuarto par de imagen y descripción -->
 <div class="contenedor">
   <div class="contenedor-imagen">
     <img src="imagenes/portadajuego4.jpg" alt="Descripción de la imagen" width="300" height="200">
   </div>
   <div class="contenedor-descripcion">
      <span>El ejercicio  de Memorizar animales de granja : Debido al límite de tiempo, este ejercicio desafía tu capacidad para procesar y reconocer rápidamente los elementos presentes en la imagen. Esto impulsa la rapidez de procesamiento cognitivo, que es crucial para diversas tareas cognitivas y de la vida cotidiana.</span><br>
    </div>
   
 </div>
 <!-- Quinto par de imagen y descripción -->
 
 <!-- arrival section end -->
 <h1 class="titulo">Reflexión </h1>
 <p> Los ejercicios que implican memorizar secuencias de números, recordar figuras que aumentan en dificultad, y contar elementos en imágenes dentro de un límite de tiempo, son todos métodos efectivos para mejorar la memoria cognitiva y la memoria a corto plazo. Estos ejercicios desafían y ejercitan una variedad de habilidades cognitivas clave, como la rapidez de procesamiento, la atención selectiva, la memoria temporal, las habilidades visuales y espaciales, la flexibilidad cognitiva y la toma de decisiones. Al practicar estos ejercicios de manera regular, se fortalecen estas habilidades, lo que puede conducir a una mejora general en el rendimiento cognitivo y una mayor agilidad mental en situaciones cotidianas que requieren procesamiento rápido y preciso de información.</p>
 
 
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