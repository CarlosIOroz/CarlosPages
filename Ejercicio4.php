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
         
    
    
    <style>
        
*{
    box-sizing: border-box;
    
}
#title {
            
            color: #ffffff;
            text-align: left;
        }

        

footer{
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #000;
    color: #000;
    font-size: 12px;
    color: #fff;
    padding: 10px;
    text-align: center;
}

/* PANTALLA INICIO */
#pantalla-inicial{
    display: block;
    text-align: center;
    font-size: 30px;
}
#pantalla-inicial{
    margin: 60px 0;
}
.btn{
    border: none;
   
    background: #d89510;
    color: #fff;
    padding: 10px 20px;
    border-radius: 50px;
    cursor: pointer;
    transition: .5s;
}
.btn:hover{
    transform: scale(1.1);
}



/* PANTALLA juego */
#pantalla-juego{
    display: none;
}
.pantalla-juego{
    max-width: 800px;
    margin: 50px auto;
    text-align: center;
}

.pantalla-juegoimg{
    max-width: 400px;
    width: 100%;
}
#imagengranja {
    width: 400px; /* Ajusta el tamaño según sea necesario */
    height: auto; /* Mantiene la proporción de aspecto */
}

.opciones{
    max-width: 400px;
    margin: auto;
    margin-bottom: 10px;
}
.opcion{
    display: flex;
    position: relative;
    align-items: center;
    max-width: 400px;
    margin: 30px auto;
    cursor: pointer;
}
.opcion .letra{
    background-color: #580078;
    width: 50px;
    height: 50px;
    font-size: 30px;
    font-weight: bold;
    color: #fff;
    text-align: center;
    border-radius: 50%;
    line-height: 35px;
    border: 5px solid #fff;
    position: relative;
}
.opcion .nombre{
    background: #fff;
    width: 100%;
    font-size: 25px;
    position: absolute;
    margin-left: 30px;
    z-index: -2;
    border-radius: 0 20px 20px 0;
    padding: 7px 0 7px 30px;
}
/* clases que se aplicará cuando haya acertada la opcion  */
.opcion .nombreAcertada{
    background-color: yellowgreen;
    color: #fff;
}
.opcion .letraAcertada{
    background-color: yellowgreen;
    color: #fff ;
}
/* clases que se aplicaran cuando se equivoque en la opcion elegida */
.opcion .nombreNoAcertada{
    background-color: darkred;
    color: #fff;
}
.opcion .letraNoAcertada{
    background-color: darkred;
    color: #fff;
}




/* PANTALLA final */
#pantalla-final{
    display: none;
    text-align: center;
}
#pantalla-final #numCorrectas{
    background-color: chartreuse;
    display: inline-block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 5px solid #fff;
}
#pantalla-final #numIncorrectas{
    background-color: darkred;
    display: inline-block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 5px solid #fff;
}
#tiempoRestante,
#numNivel,
#preguntaComun,
    #nivel-actual {
        color: white;
        font-size: 20px;
    }
#nivel-felicitacion,

#numfelidad{
    color: #dce5df;
    font-size: 20px;
}
#fraseCuantosConejos {
    color: white;
    font-size: 30px;
}


    </style>
</head>


 
    <h1 id="title" style="font-size: xx-large; position: absolute; top: 70px; left: 20px;"><b>Ejercicio : Memorizar animales de granja</b></h1>
    

    
    <!-- Pantalla inicial -->
    <div id="pantalla-inicial">
        <p style="margin-top: 200px;"><span id="fraseCuantosConejos">¿CUANTOS ANIMALES DE GRANJA HAY?</span></p>
       
        
        
        <button class="btn" style="margin-top: 200px;" onclick="comenzarJuego(60)">Dificil (60s)</button>
        <button class="btn" style="margin-top: 200px;" onclick="comenzarJuego(120)">Medio (120s)</button>
        <button class="btn" style="margin-top: 200px;" onclick="comenzarJuego(300)">Facil (300s)</button>
        
        
    </div>

    <!-- Pantalla juego -->
    <div class="pantalla-juego" id="pantalla-juego">
       
        
        <div id="tiempoRestante" class="tiempo-restante" style="margin-top: 200px;">Tiempo restante: <span id="numTiempoRestante">50</span> segundos</div>

        <div id="nivel-actual">Nivel <span id="numNivel">1</span></div>
        <div id="preguntaComun"></div>
        <img src="imagenes/ad.svg" alt="" id="imagengranja">
        <div class="opciones">
            <div class="opcion" id="op0" onclick="comprobarRespuesta(0)">
                <div class="letra" id="l0">A</div>
                <div class="nombre" id="n0">OPCION A</div>
            </div>
            <div class="opcion" id="op1" onclick="comprobarRespuesta(1)">
                <div class="letra" id="l1">B</div>
                <div class="nombre" id="n1">OPCION B</div>
            </div>
            <div class="opcion" id="op2" onclick="comprobarRespuesta(2)">
                <div class="letra" id="l2">C</div>
                <div class="nombre" id="n2">OPCION C</div>
            </div>
        </div>
        <!-- Mensaje de felicitación -->
        <div id="nivel-felicitacion">Felicidades pasaste al nivel <span id="numfelicidad">1</span></div>
        


    </div>
    <!-- Pantalla final -->
    
    <div id="pantalla-final" style="margin-top: 200px; margin-bottom: 200px;">
        <h2>CORRECTAS: <span id="numCorrectas">3</span></h2>
        <h2>INCORRECTAS: <span id="numIncorrectas">2</span></h2>
        <button class="btn" onclick="volverAlInicio()">VOLVER AL INICIO</button>
    </div>

    
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
      <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Equipo</a></div>
   </div>
</div>
    
    <script src="Ejercicio4.js"></script>
</body>
</html>