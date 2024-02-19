<?php
include 'php/scoreejercicio3.php';

if (!isset($_SESSION["usuario"])) {
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
      <!-- header section end aqui comienza el juego-->
      
      <style>
         #container {
            margin-top: 100px; /* Agrega un margen superior de 20px */
            display: grid;
            grid-template-columns: repeat(4, 100px);
            grid-template-rows: repeat(4, 100px);
            gap: 6px; /* Espacio entre las divisiones */
            margin-bottom: 100px; /* Ajusta el margen inferior según sea necesario */
            
            
           
            
            
        }
        .container {
       display: flex;
       justify-content: center;
       align-items: center;
       height: 80vh; /* O ajusta la altura según sea necesario */
         }
        
    
        #title {
            
            color: #ffffff;
            text-align: left;
        }
    
        
    
        .cell {
            background-color: #eee;
            border: 1px solid #ccc;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            cursor: pointer;
        }
    
        .highlighted {
            background-color: yellow;
        }
    
        .wrong {
            background-color: red !important;
            color: white !important;
        }
    
        #levelDisplay {
            margin-top: 10px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
    
        #errorMessage {
            text-align: center;
            margin-top: 20px;
            color: red;
            display: none;
        }
    
        #congratsMessage {
            text-align: center;
            margin-top: 20px;
            color: #ffffff;
            display: none;
        }
    
        .btn-comenzar, .btn-siguiente, .btn-jugar {
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            cursor: pointer;
            transition: .5s;
            font-size: 16px;
        }
    
        .btn-comenzar {
            background: #d89510;
            color: #fff;
        }
    
        .btn-siguiente {
            background: #d89510;
            color: #fff;
        }
    
        .btn-jugar {
            background: #d89510;
            color: #fff;
        }
    
        .btn-comenzar:hover, .btn-siguiente:hover, .btn-jugar:hover {
            transform: scale(1.1);
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

<div class="container">
    
<div class="ejercios_juegos">
    
    
    
    
    <h1 id="title" style="font-size: xx-large; position: absolute; top: 70px; left: 20px;"><b>Ejercicio : Memorizar secuencias</b></h1>
            
            
   
    
    
    
    <div id="container">
        <div class="cell" id="cell-0" onclick="handleClick(0)"></div>
        <div class="cell" id="cell-1" onclick="handleClick(1)"></div>
        <div class="cell" id="cell-2" onclick="handleClick(2)"></div>
        <div class="cell" id="cell-3" onclick="handleClick(3)"></div>
        <div class="cell" id="cell-4" onclick="handleClick(4)"></div>
        <div class="cell" id="cell-5" onclick="handleClick(5)"></div>
        <div class="cell" id="cell-6" onclick="handleClick(6)"></div>
        <div class="cell" id="cell-7" onclick="handleClick(7)"></div>
        <div class="cell" id="cell-8" onclick="handleClick(8)"></div>
        <div class="cell" id="cell-9" onclick="handleClick(9)"></div>
        <div class="cell" id="cell-10" onclick="handleClick(10)"></div>
        <div class="cell" id="cell-11" onclick="handleClick(11)"></div>
        <div class="cell" id="cell-12" onclick="handleClick(12)"></div>
        <div class="cell" id="cell-13" onclick="handleClick(13)"></div>
        <div class="cell" id="cell-14" onclick="handleClick(14)"></div>
        <div class="cell" id="cell-15" onclick="handleClick(15)"></div>
    </div>

    <div id="levelDisplay"></div>

    <div id="errorMessage">Has perdido</div>
    <div id="congratsMessage">¡Felicidades! Has pasado al siguiente nivel</div>
    <div id="remainingAttempts"></div>
    <div id="buttons" style="display: flex; justify-content: center; align-items: center;">
        <button class="btn-comenzar" onclick="startGame()">Comenzar juego</button>
        <button class="btn-siguiente" style="display:none" id="nextLevelButton" onclick="startNextLevel()">Comenzar siguiente nivel</button>
        <button class="btn-jugar" style="display:none" id="playAgainButton" onclick="playAgain()">Jugar otra vez</button>
        <form id="puntajeForm" method="post">
            <input type="hidden" id="puntaje_final" name="puntaje_final">
        </form>
        <button id="submitButton" type="button" style="display: none;">Subir Puntaje a tu cuenta</button>
    </div>
    </div>

    

    

    <script>
        let sequence = [];
        let currentIndex = 0;
        let currentLevel = 1;
        let repeatsLeft = 3;
        let gameStarted = false;
        let gameEnded = false;
        const totalLevels = 10;
        const levelSequenceLengths = [2, 3, 4, 5, 6, 7, 8, 9, 10, 11];

        function disableGameInteraction() {
            const cells = document.getElementsByClassName('cell');
            for (let cell of cells) {
                cell.style.pointerEvents = 'none';
            }
        }

        function enableGameInteraction() {
            const cells = document.getElementsByClassName('cell');
            for (let cell of cells) {
                cell.style.pointerEvents = 'auto';
            }
        }

        function startGame() {
            document.getElementById('submitButton').style.display = 'none';
            currentLevel = 1;
            sequence = generateSequence(levelSequenceLengths[currentLevel - 1]);
            playSequence();
            document.querySelector('.btn-comenzar').style.display = 'none';
            document.getElementById("levelDisplay").innerText = `Nivel ${currentLevel}`;
            
            document.getElementById("errorMessage").style.display = 'none';
            document.getElementById("congratsMessage").style.display = 'none';
            document.getElementById("nextLevelButton").style.display = 'none';
            document.getElementById("playAgainButton").style.display = 'none';
            document.getElementById("remainingAttempts").style.display = 'none';
            repeatsLeft = 3;
            gameStarted = true;
            gameEnded = false;
            enableGameInteraction();
        }

        function handleClick(cellId) {
            if (!gameStarted || gameEnded) return;
            const cell = document.getElementById(`cell-${cellId}`);
            if (cellId === sequence[currentIndex]) {
                highlightCell(cellId);
                currentIndex++;
                if (currentIndex === sequence.length) {
                    currentIndex = 0;
                    if (currentLevel < totalLevels) {
                        currentLevel++;
                        showCongratsMessage();
                        document.getElementById("nextLevelButton").style.display = 'block';
                        disableGameInteraction(); // Deshabilita la interacción después de mostrar el mensaje de felicitaciones
                    } else {
                        currentLevel = 1;
                        sequence = generateSequence(levelSequenceLengths[currentLevel - 1]);
                        playSequence();
                        document.getElementById("levelDisplay").innerText = `Nivel ${currentLevel}`;
                        document.getElementById("congratsMessage").innerText = '¡Felicidades! Has terminado el juego.';
                    }
                }
            } else {
                cell.classList.add('wrong');
                document.getElementById("errorMessage").style.display = 'block';
                scorefinal = currentLevel - 1;
                currentIndex = 0;
                setTimeout(() => {
                    cell.classList.remove('wrong');
                    document.getElementById("errorMessage").style.display = 'none';
                }, 500);
                document.getElementById("playAgainButton").style.display = 'block';
                // Mostrar el botón para enviar el formulario
                document.getElementById('submitButton').style.display = 'block';
                    // Establecer el puntaje final en el campo de entrada oculto
                document.getElementById('puntaje_final').value = scorefinal;
                gameEnded = true;
                disableGameInteraction(); // Deshabilita la interacción cuando se comete un error
            }
        }

        function playSequence() {
            for (let i = 0; i < sequence.length; i++) {
                setTimeout(() => {
                    highlightCell(sequence[i]);
                }, i * 1000);
            }
            document.getElementById("playAgainButton").style.display = 'none';
        }

        function generateSequence(length) {
            const sequence = [];
            for (let i = 0; i < length; i++) {
                sequence.push(Math.floor(Math.random() * 16));
            }
            return sequence;
        }

        function playAgain() {
            currentIndex = 0;
            startGame();
            document.getElementById("playAgainButton").style.display = 'none';
            document.getElementById("errorMessage").style.display = 'none';
            enableGameInteraction(); // Habilita la interacción cuando se juega de nuevo
        }

        function showCongratsMessage() {
            document.getElementById("congratsMessage").style.display = 'block';
        }

        function startNextLevel() {
            document.getElementById("nextLevelButton").style.display = 'none';
            sequence = generateSequence(levelSequenceLengths[currentLevel - 1]);
            playSequence();
            document.getElementById("levelDisplay").innerText = `Nivel ${currentLevel}`;
            enableGameInteraction(); // Habilita la interacción cuando se inicia el siguiente nivel
        }

        function highlightCell(cellId) {
            const cell = document.getElementById(`cell-${cellId}`);
            cell.classList.add('highlighted');
            setTimeout(() => {
                cell.classList.remove('highlighted');
            }, 500);
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
                window.location = "../Residencia/Ejercicio3.php";
            }
        };

        // Abrir la solicitud
        xhttp.open("POST", "php/scoreejercicio3.php", true);

        // Establecer el encabezado de la solicitud para indicar que se está enviando datos de formulario
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        // Enviar la solicitud con los datos del formulario
        xhttp.send("puntaje_final=" + puntajeFinal);
    });

    </script>
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
    <!-- copyright section end -->

</body>
</html>