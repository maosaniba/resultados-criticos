<?php

    include 'conexion_be.php';
    


    $fecha = $_POST['fecha'];
    $hora_ingreso = $_POST['hora_ingreso'];
    $hora_resultado = $_POST['hora_resultado'];
    $hora_aviso" = $_POST['hora_aviso"'];


    $query = "INSERT INTO resultados_criticos (fecha, hora_ingreso, hora_resultado, hora_aviso)
              VALUES('$fecha', '$hora_ingreso', '$hora_resultado', '$hora_aviso')";




    $ejecutar = mysqli_query($conexion, $query);


    if($ejecutar){
        echo '
        <script>
            alert("Informacion Guardada con Exito");
            window.location = "/bienvenidos.php";
            </script>
        
        ';
    }

    mysqli_close($conexion);
?>  