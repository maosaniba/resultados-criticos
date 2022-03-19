<?php

    include 'conexion_be.php';
    


    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    //Encriptar contraseña
    //$password = hash('sha512', $password);


    $query = "INSERT INTO login_user(nombre_completo, correo, usuario, password)
              VALUES('$nombre_completo', '$correo', '$usuario', '$password')";



    //verificar que no se repitan correo base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM login_user WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya esta registrado");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

//verificar que no se repitan usuario  base de datos
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM login_user WHERE usuario = '$usuario'");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '
        <script>
            alert("Este usuario ya esta registrado");
            window.location = "../index.php";
        </script>

    ';
    exit();
}


    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar){
        echo '
        <script>
            alert("Usuario creado con exito");
            window.location = "../index.php";
            </script>
        
        ';
    }else{
        echo '
        <script>
            alert("No se pudo realizar el registro");
            window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>  