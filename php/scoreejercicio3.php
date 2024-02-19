<?php
session_start();
include 'connection.php';

// Obtener el nombre de usuario de la sesión
$nombre_usuario = $_SESSION["usuario"];

// Obtener el puntaje máximo actual del usuario desde la base de datos
$puntaje_maximo = 0; // Valor predeterminado
$consulta_score = mysqli_query($conexion, "SELECT score3 FROM usuarios WHERE name='$nombre_usuario'");
if(mysqli_num_rows($consulta_score) > 0){ 
    $fila = mysqli_fetch_assoc($consulta_score);
    $puntaje_maximo = $fila['score3']; 
}

// Verificar si se ha enviado el puntaje final desde el formulario
if(isset($_POST['puntaje_final'])) {
    // Obtener el puntaje final del juego desde el formulario
    $puntaje_final = $_POST['puntaje_final'];

    // Verificar si el puntaje final es mayor que el puntaje máximo actual
    if ($puntaje_final > $puntaje_maximo) {
        // Actualizar el puntaje máximo en la base de datos
        $actualizar_score = mysqli_query($conexion, "UPDATE usuarios SET score3='$puntaje_final' WHERE name='$nombre_usuario'");
        if($actualizar_score) {
            echo '<script>alert("¡Felicitaciones! Has superado tu puntaje máximo.");</script>';
            // Actualizar el puntaje máximo en la variable PHP para su uso en HTML
            $puntaje_maximo = $puntaje_final;
        } else {
            echo '<script>alert("Hubo un error al actualizar tu puntaje máximo.");</script>';
        }
    } else {
        echo '<script>alert("Tu puntaje no superó el puntaje máximo actual.");</script>';
    }
}
?>
