<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Monedas</title>
</head>

<body>
    <h1>Bienvenido al Conversor Universal</h1>
    <p>Selecciona el conversor que quieres utilizar:</p>
    <form action="" method="GET">
    <input type="submit" value="Conversor de Moneda" name="moneda">
    <input type="submit" value="Conversor de Longitud" name="longitud">
    <input type="submit" value="Conversor de Masa" name="masa">
    <input type="submit" value="Conversor de Volumen" name="volumen">
    <input type="submit" value="Conversor de Datos" name="datos">
    <input type="submit" value="Conversor de Tiempo" name="tiempo">
    </form>

    <?php 
    if ($_GET['moneda']){
        require 'Controlador/logica-moneda.php';
        require 'Secciones/seccion-moneda.php';
    } elseif($_GET['longitud']){
        require 'Controlador/logica-longitud.php';
        require 'Secciones/seccion-longitud.php';
    }  elseif($_GET['masa']){
        require 'Secciones/seccion-masa.php';
    }  elseif($_GET['volumen']){
        require 'Secciones/seccion-volumen.php';
    }  elseif($_GET['datos']){
        require 'Secciones/seccion-datos.php';
    }  elseif($_GET['tiempo']){
        require 'Controlador/logica-tiempo.php';
        require 'Secciones/seccion-tiempo.php';
    }
    ?>
</body>
</html>