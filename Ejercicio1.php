<?php
include 'php/scoreejercicio1.php';


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

   $nombre_usuario = $_SESSION["usuario"];  
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
      <div class="ejercicios_juegos layout_padding">
        <div class="ejercicios_section_2 layout_padding">
            <h2 class="Ejercicio_text" style="font-size: xx-large;"><b>Ejercicio: Recordar el número</b></h2>
            <br>
            <br>
        </div>
        <div id="mensaje-perdio" style="display: none;">Te equivocaste, intentalo de nuevo</div>
        <form id="puntajeForm" method="post">
        <input type="hidden" id="puntaje_final" name="puntaje_final">
        </form>
        <div id="score" ></div>
        <div class="grid-container">

            <!---INICIO DE CODIGO EJERCICIO-->
               
<style>


.Ejercicio-numero-completo {

    text-align: center;
}

#user-input {
    font-size: 16px;
    padding: 10px 20px;
    margin: 5px;
    cursor: pointer;
    background-color: #ffffff;
    color: rgb(0, 0, 0);
    border: none;
    border-radius: 5px;
    position: absolute;
    text-align: center;
    top: 44.5;
    left: 43%;
}

.button {
    position: absolute;
    top: 44.5%;
    left: 45%;
    font-size: 16px;
    padding: 10px 20px;
    margin: 5px;
    cursor: pointer;
    background-color: #d89510;
    color: white;
    border: none;
    border-radius: 3px;
    order: 2; /* Cambia el orden del botón */
}

.number-level {
   font-size: 30px;
   color: rgb(255, 255, 255);
}

#number-display, #tiempo-memoria {
    user-select: none;
}

.grid-container {
            width: 100%; /* Tamaño inicial del contenedor */
            height: 60vh; /* Ajusta según sea necesario */
            margin: 0 auto; /* Centra el contenedor horizontalmente */
            display: grid;
            justify-content: center;
            align-items: center;
            /*border: 2px solid black; /*borde para visualizar*/
            overflow: hidden; /* Oculta el desbordamiento */
        }


.next-button {
        position: absolute;
        top: 44.5;
        left: 45.6%;
        font-size: 16px;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        background-color: #d89510;
        color: white;
        border: none;
        border-radius: 3px;
        order: 2; /* Cambia el orden del botón */
    }

    #mensaje-perdio {
    position: absolute;
    top: 38%;
    font-size: 30px;
    color: rgb(255, 255, 255);
    }

    .username_section {
        color: #ffffff; 
    }
    
    #submitButton {
            background: #113a91;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            color: white;
            cursor: pointer;
            transition: .5s;
            font-size: 16px;
        }
    
</style>
    </head>
  
    <div class="Ejercicio-numero-completo">
        
        <div id="number-display" class="number-level" style="font-size: 30px;"></div>
        <input type="text" id="user-input" placeholder="Enter the number" onkeypress="checkEnter(event)">
        <button id="startButton" class="button" onclick="startGame()">Iniciar Ejercicio</button>
        <!-- Nuevo botón para el siguiente nivel -->
        <button id="nextLevelButton" class="next-button" style="display: none;" onclick="nextLevel()">Siguiente Nivel</button>

        <button id="submitButton" type="button" style="display: none;">Subir Puntaje a tu cuenta</button>


        <div id="tiempo-memoria"></div>
    </div>

   
      <script>
        const mensajePerdio = document.getElementById('mensaje-perdio'); // Nuevo elemento para mostrar el mensaje de pérdida
          let WinoLose = false;
          let level = 1;
          let currentNumber = null;
          document.getElementById('user-input').value = '';
          document.getElementById('user-input').style.display = 'none';
      
          function startGame() {
              // Oculta el botón "Start Game"
              document.getElementById('submitButton').style.display = 'none';

              document.getElementById('startButton').style.display = 'none';
              document.getElementById('user-input').style.display = 'block';
              document.getElementById('number-display').style.display = 'block';
              mensajePerdio.style.display = 'none'; // Mostrar el mensaje de pérdida
      
              // Crea el elemento div si aún no existe
              if (!document.getElementById('number-display')) {
                  let divElement = document.createElement('div');
                  divElement.id = 'number-display';
                  document.body.appendChild(divElement);
              }
      
              // Obtén el número aleatorio y muestra el texto "Level" y el número debajo
              currentNumber = generateRandomNumber(level);
              document.getElementById('number-display').innerText = 'Level ' + level + '\n' + currentNumber;
              
      
              // Actualiza el nivel
              level++;
      
              // Verifica si se alcanzó el nivel máximo (20) y reinicia si es necesario
              if (level > 20) {
                  level = 1;
              }
      
              // Limpiar el valor del input
              document.getElementById('user-input').value = '';
              document.getElementById('user-input').style.display = 'none';
      
              // Configurar el tiempo de visualización basado en el nivel
              const displayTime = level;


// Mostrar el tiempo en el elemento "tiempo-memoria" con estilos
document.getElementById('tiempo-memoria').innerHTML = '<span style="font-size: 20px; color: red;">Tiempo: ' + displayTime + ' segundos</span>';

    // Actualizar el tiempo cada segundo
    let countdown = displayTime;
    const countdownInterval = setInterval(function () {
        countdown--;

        // Mostrar el tiempo actualizado en el elemento "tiempo-memoria"
        document.getElementById('tiempo-memoria').innerHTML = '<span style="font-size: 20px; color: red;">Tiempo: ' + countdown + ' segundos</span>';

        // Verificar si el tiempo ha llegado a cero
        if (countdown <= 0) {
            clearInterval(countdownInterval); // Detener la actualización del tiempo
            hideNumber();

            // Limpiar el tiempo de visualización
            document.getElementById('tiempo-memoria').innerText = '';

            // Mostrar el input después de ocultar el número aleatorio
            document.getElementById('number-display').innerHTML = '¿Cuál era el número?<br><span style="font-size: 15px;">Da a la tecla Enter para introducir tu respuesta</span>'
            document.getElementById('user-input').style.display = 'block';
            document.getElementById('user-input').focus();
        }
    }, 1000);
}
     
          function hideNumber() {
              // Ocultar el número aleatorio
              document.getElementById('number-display').innerText = '';
          }
      
          function generateRandomNumber(digits) {
              let min = Math.pow(10, digits - 1);
              let max = Math.pow(10, digits) - 1;
      
              // Ajustar el rango para permitir hasta 20 dígitos
              if (digits > 20) {
                  console.error("El número máximo de dígitos permitido es 20.");
                  return null;
              }
      
              return Math.floor(Math.random() * (max - min + 1)) + min;
          }
      
          function checkEnter(event) {
              if (event.key === 'Enter') {
                  // Obtén el valor del input
                  const userInput = document.getElementById('user-input').value;
                  checkUserInput(userInput);
              }
          }
      
          function checkUserInput(userInput) {
            if (userInput == currentNumber) {
                // Muestra el mensaje de éxito
                document.getElementById('number-display').innerHTML = 'Correcto<br><span style="font-size: 15px;">Clic al boton para pasar al siguiente nivel</span>';
                // Muestra el botón "Next Level"
                document.getElementById('nextLevelButton').style.display = 'block';
                // Oculta el botón "Start Game"
                document.getElementById('startButton').style.display = 'none';
                // Oculta el input después de ingresar la respuesta correcta
                document.getElementById('user-input').style.display = 'none';
            } else {
                // Llama a la función de Game Over
                gameOver();
            }
        }

        function nextLevel() {
            // Oculta el botón "Next Level"
            document.getElementById('nextLevelButton').style.display = 'none';
            // Inicia el próximo nivel
            startGame();
        }
      
          // Dentro de la función gameOver()
function gameOver() {
    // Mostrar mensaje de Game Over
    let scorefinal = level - 2;

    level = 1;
    // Mostrar botón de reinicio
    document.getElementById('startButton').style.display = 'block';
    document.getElementById('startButton').innerText = 'Reiniciar Ejercicio';
    //document.getElementById('user-input').value = '';
    document.getElementById('user-input').style.display = 'none';
    document.getElementById('number-display').style.display = 'none';
    mensajePerdio.style.display = 'block'; // Mostrar el mensaje de pérdida

    // Establecer el puntaje final en el campo de entrada oculto
    document.getElementById('puntaje_final').value = scorefinal;

    // Mostrar el botón para enviar el formulario
    document.getElementById('submitButton').style.display = 'block';
}

        document.getElementById('submitButton').addEventListener('click', function() {
        // Obtener el puntaje final del input oculto
        var puntajeFinal = document.getElementById('puntaje_final').value;

        // Crear un objeto XMLHttpRequest
        var xhttp = new XMLHttpRequest();

        // Configurar la solicitud
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Manejar la respuesta del servidor
                console.log(this.responseText);
                // Redireccionar o manejar la respuesta según sea necesario
                window.location = "../Residencia/Ejercicio1.php";
            }
        };

        // Abrir la solicitud
        xhttp.open("POST", "php/scoreejercicio1.php", true);

        // Establecer el encabezado de la solicitud para indicar que se está enviando datos de formulario
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        // Enviar la solicitud con los datos del formulario
        xhttp.send("puntaje_final=" + puntajeFinal);
    });

      </script>

      <!---FIN DE CODIGO EJERCICIO-->

            </div>
        </div>

    </div>
    <div class="username_section">
            <b><p>Usuario: <?php echo $nombre_usuario;?></p></b>
            <!-- Muestra el puntaje máximo -->
            <b><p>Puntaje máximo alcanzado: <?php echo $puntaje_maximo; ?></p></b>
    </div>
      
      <!-- movies section end -->
<!-- footer section start -->
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
<!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Equipo Residencia</a></div>
         </div>
      </div>
      <!-- copyright section end -->

      
   </body>
</html>