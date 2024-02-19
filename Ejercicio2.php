<?php
include 'php/scoreejercicio2.php';

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
    <!-- header section end -->

    <style>
        .title_container {
            display: block;
            justify-content: left;
        }

        #title {
            margin-top: 50px;
            /* Adjust as needed */
            text-align: left;
        }

        .grid-container {
            width: 100%;
            /* Initial container size */
            height: 60vh;
            /* Adjust as needed */
            margin: 0 auto;
            /* Center the container horizontally */
            display: grid;
            justify-content: center;
            align-items: center;
            /*border: 2px solid black; /*borde para visualizar*/
            overflow: hidden;
            /* Hide overflow */
        }

        .grid {
            display: grid;
            justify-content: center;
            align-items: center;
            width: 100%;
            /* Occupy all available space in the container */
            height: 100%;
            /* Occupy all available space in the container */
            grid-template-columns: repeat(auto-fill, minmax(50px, 1fr));
            /* Define number of columns and their size */
            grid-template-rows: repeat(auto-fill, minmax(50px, 1fr));
            /* Define number of rows and their size */
            gap: 5px;
            /* Adjust space between squares */
        }

        .square {
            background-color: lightgray;
            border-radius: 5px;
            /* Rounded border */
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: calc(500px / var(--grid-size));
            /* Calculate dynamic width based on grid size */
            height: calc(500px / var(--grid-size));
            /* Calculate dynamic height based on grid size */

        }

        :root {
            --grid-size: 3;
            /* Initial grid size */
        }

        .Start-button {
            position: absolute;
            top: 44.5%;
            left: 46.3%;
            font-size: 16px;
            padding: 10px 20px;
            margin: 5px;
            cursor: pointer;
            background-color: #d89510;
            color: white;
            border: none;
            border-radius: 3px;
            order: 2;
            /* Cambia el orden del botón */
        }

        .Next-level {
            position: absolute;
            top: 83%;
            left: 45.75%;
            font-size: 16px;
            padding: 5px 20px;
            margin: 5px;
            cursor: pointer;
            background-color: #d89510;
            color: white;
            border: none;
            border-radius: 3px;

        }

        #mensaje-perdio {
            position: absolute;
            justify-content: center;
            top: 38%;
            font-size: 30px;
            color: rgb(255, 255, 255);
        }

        .username_section{                
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

    <!-- Memory Game Section -->
    <!-- Memory Game Section -->
    <div class="ejercicios_juegos layout_padding">
        <div class="ejercicios_section_2 layout_padding">
            <h2 class="Ejercicio_text" style="font-size: xx-large;"><b>Ejercicio: Recordar la figura</b></h2>
            <br>
            <!-- Agregar el nivel del jugador -->
            <h1 id="levelDisplay" style="text-align: center;">Nivel 1</h1>
        </div>
        <div class="grid-container">
            <div class="grid" id="gameGrid">
                <!-- Squares will be dynamically added here -->
            </div>
        </div>
        <div id="mensaje-perdio" style="display: none;">Te equivocaste, intentalo de nuevo</div>
        <button id="startButton" class="Start-button">Iniciar Ejercicio</button>
        <button id="nextLevelButton" class="Next-level">Siguiente Nivel</button>
        <form id="puntajeForm" method="post">
            <input type="hidden" id="puntaje_final" name="puntaje_final">
        </form>
        <button id="submitButton" type="button">Subir Puntaje a tu cuenta</button>
    </div>

    <script>
        const gameGrid = document.getElementById('gameGrid');
        const startButton = document.getElementById('startButton');
        const nextLevelButton = document.getElementById('nextLevelButton');
        const levelDisplay = document.getElementById('levelDisplay');
        const mensajePerdio = document.getElementById('mensaje-perdio');
        const submitscore = document.getElementById('submitButton');
        const maxAttempts = 3;
        let sequence = [];
        let correctCount = 0;
        let incorrectAttempts = 0;
        let gameInProgress = false;
        let level = 1; // Initial level
        const levelsToIncreaseSize = 3; // Number of levels to increase the size of the grid
        let gridSize = 3; // Initial grid size (3x3)

        document.getElementById('nextLevelButton').style.display = 'none';
        document.getElementById('levelDisplay').style.display = 'none';
        startButton.addEventListener('click', startGame);
        document.getElementById('submitButton').style.display = 'none';

        function startGame() {
            mensajePerdio.style.display = 'none';
            submitscore.style.display = 'none';
            document.getElementById('levelDisplay').style.display = 'block';
            document.getElementById('startButton').style.display = 'none';
            if (gameInProgress) return;
            gameInProgress = true;
            generateSequence();
            displaySquares();
            setTimeout(() => {
                fadeSquares();
                enableClicks();
            }, 4000);

            document.getElementById('gameGrid').style.display = 'grid';
        }

        function generateSequence() {
            sequence = Array.from({
                length: gridSize ** 2
            }, () => Math.random() < 0.5);
            correctCount = 0;
            incorrectAttempts = 0;
        }

        function displaySquares() {
            gameGrid.innerHTML = '';
            gameGrid.style.gridTemplateColumns = `repeat(${gridSize}, 1fr)`;
            gameGrid.style.gridTemplateRows = `repeat(${gridSize}, 1fr)`;
            sequence.forEach((light, index) => {
                const square = document.createElement('div');
                square.classList.add('square');
                if (light) {
                    square.dataset.light = 'true';
                    square.style.backgroundColor = 'blue';
                }
                gameGrid.appendChild(square);
            });
        }

        function fadeSquares() {
            const squares = document.querySelectorAll('.square');
            squares.forEach(square => {
                square.style.backgroundColor = 'lightgray';
            });
        }

        function enableClicks() {
            const squares = document.querySelectorAll('.square');
            squares.forEach(square => {
                square.addEventListener('click', squareClicked);
            });
        }

        function squareClicked(event) {
            const square = event.target;
            if (!gameInProgress || square.classList.contains('clicked')) return;
            square.classList.add('clicked');
            const index = Array.from(square.parentNode.children).indexOf(square);
            if (sequence[index]) {
                square.style.backgroundColor = 'blue';
                correctCount++;
                if (correctCount === document.querySelectorAll('.square[data-light="true"]').length) {
                    showCongratulations();
                }
            } else {
                square.style.backgroundColor = 'red';
                incorrectAttempts++;
                if (incorrectAttempts === maxAttempts) {
                    gameOver();
                }
            }
        }

        function showCongratulations() {
            setTimeout(() => {
                level++;
                nextLevel();
            }, 300);
        }

        function increaseGridSize() {
            gridSize++;
        }

        function updateGridSize() {
            document.documentElement.style.setProperty('--grid-size', gridSize);
            submitscore.style.display = 'block';
        }

        function nextLevel() {
            document.getElementById('nextLevelButton').style.display = 'block';

        }

        nextLevelButton.addEventListener('click', nextButton);

        function nextButton() {
            gameInProgress = false;
            document.getElementById('nextLevelButton').style.display = 'none';
            if (level % levelsToIncreaseSize === 0) {
                increaseGridSize();
                updateGridSize();
            }
            levelDisplay.textContent = `Nivel ${level}`;
           // document.getElementById('submitButton').style.display = 'block';
            startGame();
        }

        function gameOver() {
            let scorefinal = level - 1;
            document.getElementById('puntaje_final').value = scorefinal;
            document.getElementById('nextLevelButton').style.display = 'none';
            document.getElementById('levelDisplay').style.display = 'none';
            mensajePerdio.style.display = 'block';
            document.getElementById('startButton').style.display = 'block';
            document.getElementById('gameGrid').style.display = 'none';
            document.getElementById('startButton').textContent = 'Reiniciar Ejercicio';
            document.getElementById('submitButton').style.display = 'block';
            resetGame();
            gridSize = 3;
            level = 1;
            levelDisplay.textContent = `Nivel ${level}`;
            updateGridSize();
        }

        document.getElementById('submitButton').addEventListener('click', function() {
            var puntajeFinal = document.getElementById('puntaje_final').value;
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    console.log(this.responseText);
                    window.location = "../Residencia/Ejercicio2.php";
                }
            };
            xhttp.open("POST", "php/scoreejercicio2.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send("puntaje_final=" + puntajeFinal);
        });

        function resetGame() {
            gameInProgress = false;
            startButton.disabled = false;
        }
    </script>

    <div class="username_section">
        <b><p>Usuario: <?php echo $nombre_usuario;?></p></b>
        <b><p>Puntaje máximo alcanzado: <?php echo $puntaje_maximo; ?></p></b>
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

        <div class="copyright_section">
            <div class="container">
                <div class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Equipo Residencia</a></div>
            </div>
        </div>


</body>

</html>
