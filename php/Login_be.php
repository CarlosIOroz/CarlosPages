<?php
    session_start();
    include 'connection.php';

    $correo = $_POST['email']; // Nombre del campo del formulario
    $password = $_POST['password'];

    // Verificar la contraseña almacenada en la base de datos
    $password = hash('sha512', $password);

    // Consulta para verificar si el correo electrónico y la contraseña coinciden
    $validar_login = mysqli_query($conexion, "SELECT name FROM usuarios WHERE email='$correo' AND password='$password'");

    if(mysqli_num_rows($validar_login) > 0){ // Si se encuentra el usuario
        $row = mysqli_fetch_assoc($validar_login);
        $nombre = $row['name']; // Obtener el nombre de usuario de la base de datos
        $_SESSION['usuario'] = $nombre; // Almacenar el nombre en $_SESSION['usuario']
        header("location: ../index.php");
        exit;
    }
    else{
        echo '
        <script>
            alert("El usuario no existe o la contraseña es incorrecta. Por favor, verifique los datos introducidos");
            window.location = "../Login.php";
        </script>
        ';
    }
?>
