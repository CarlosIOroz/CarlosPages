<?php

   include 'connection.php'; 

    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $query = "INSERT INTO usuarios(name, email, password) 
                       VALUES ('$nombre','$correo','$password')";
    
    //Validacion para evitar correo duplicado
    $correo_dup = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$correo' ");

    if(mysqli_num_rows($correo_dup) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado, Porfavor intenta otro diferente");
                window.location = "../Signup.php";
            </script>
        ';
        exit();
    }
    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../Login.php";
        </script>
        ';
    }
    else{
        echo '
        <script>
            alert("Intentelo de nuevo, usuario no almacenado");
            window.location = "../Signup.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>