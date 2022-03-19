<?php 

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM login_user WHERE correo='$correo' and password='$password'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: bienvenidos.php");
        exit;
    }else{
        echo '
            <script>
                alert("Datos incorrectos o usuario no registrado");
                window.location = "../index.php";
            </script>
        
        ';
        exit;

    }
    
    


?>