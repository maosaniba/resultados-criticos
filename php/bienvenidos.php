<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo '
        <script>
            alert("Por favor iniciar session");
            window.location = "../index.php";
        </script>
    ';
    
    session_destroy();
    die();
}
    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Criticos</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/criticos/css/estilos_bienvenida.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    
                    

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">

        
                    <!--Register-->
                    <form action="php/formulario_criticos.php" method = "POST" class="formulario__register">
                        <h2>Criticos</h2>
                        <input type="text" placeholder="Fecha" name = "fecha">
                        <input type="time" placeholder="Hora Ingreso"name = "hora_ingreso">
                        <input type="text" placeholder="Hora Resultado" name = "hora_resultado">
                        <input type="text" placeholder="Hora Aviso" name = "hora_aviso">
                        <input type="number" placeholder="No. Enterprise" name = "n_enterprise">
                        <input type="number" placeholder="Paciente" name = "paciente">
                        <input type="number" placeholder="No. Historia" name = "n_historia">
                        <input type="text" placeholder="Quien Recibe Resultado" name = "quien_recibe">
                        <input type="text" placeholder="Aviso Personal" name = "a_personal">
                        <input type="number" placeholder="Aviso Telefonico" name = "a_telefonico">
                        <input type="text" placeholder="Servicio" name = "servicio">
                        <input type="text" placeholder="Analito" name = "analito">
                        <input type="text" placeholder="Resultado Comunicado" name = "resultado_comun">
                        <input type="text" placeholder="Resultado Feed Back" name = "resultado_feed">
                        <input type="text" placeholder="Bacteriologo" name = "bacteriologo">
                        
                        <button>GUARDAR</button>

                        <!--<h4 align = "center"> Solo Usuarios administradores</h4>-->
                    </form>
                </div>
            </div>

        </main>

        <script src="js/script.js"></script>
        <a href="salir.php"> Salir</a>
</body>
</html>
<body>
