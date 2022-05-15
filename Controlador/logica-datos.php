<?php

require 'Clases/clase-datos.php';

$resultado = false;

if(isset($_POST['dato1']) && 
   isset($_POST['dato2']) && 
   isset($_POST['valor']) && 
   isset($_POST['convertir'])){ //Si existen dato1, valor y se ha usado el boton convertir.

    $dato1 = $_POST['dato1'];
    $dato2 = $_POST['dato2'];
    $valor = $_POST['valor'];
    $convertir = $_POST['convertir'];
    
    if($dato2 == 'B') { 

        $convertirByte = new toByte();
        $resultado = 'Bytes' . ' ' . $convertirByte->originalData($dato1, $valor);

    } elseif ($dato2 == 'KB') {

       $convertirKiloByte = new toKilobyte();
       $resultado = 'KB' . ' ' . $convertirKiloByte->originalData($dato1, $valor);

    } elseif ($dato2 == 'MB') {

        $convertirMegaByte = new toMegabyte();
        $resultado = 'MB' . ' ' .  $convertirMegaByte->originalData($dato1, $valor);
        
    }elseif ($dato2 == 'GB') {

        $convertirGigaByte = new toGigabyte();
        $resultado = 'GB' . ' ' .  $convertirGigaByte->originalData($dato1, $valor);
        
    } elseif ($dato2 == 'TB') {

        $convertirTeraByte = new toTerabyte();
        $resultado = 'TB' . ' ' .  $convertirTeraByte->originalData($dato1, $valor);
    
    } elseif ($dato2 == 'PB') {

        $convertirPetaByte = new toPetabyte();
        $resultado = 'PB' . ' ' .  $convertirPetaByte->originalData($dato1, $valor);
       
    }elseif(isset($_POST['limpiar'])){
        header("Location:index.php");
    } else {
        $resultado = "Dato no Valido";
    }
}

?>