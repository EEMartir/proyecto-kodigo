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
    
    if($dato2 == 'Byte') { 

        $convertirByte = new toByte();
        $resultado = 'B' . ' ' . $convertirByte->originalData($moneda1, $valor);

    } elseif ($dato2 == 'KiloByte') {

       $convertirKiloByte = new toKilobyte();
       $resultado = 'KB' . ' ' . $convertirKiloByte->originalData($_POST['dato1'], $_POST['valor']);

    } elseif ($dato2 == 'MegaByte') {

        $convertirMegaByte = new toMegabyte();
        $resultado = 'MB' . ' ' .  $convertirMegaByte->originalData($_POST['dato1'], $_POST['valor']);
        
    }elseif ($dato2 == 'GigaByte') {

        $convertirGigaByte = new toGigabyte();
        $resultado = 'GB' . ' ' .  $convertirGigaByte->originalData($_POST['dato1'], $_POST['valor']);
        
    } elseif ($dato2 == 'TeraByte') {

        $convertirTeraByte = new toTerabyte();
        $resultado = 'TB' . ' ' .  $convertirTeraByte->originalData($_POST['dato1'], $_POST['valor']);
    
    } elseif ($moneda2 == 'PetaByte') {

        $convertirPetaByte = new toPetabyte();
        $resultado = 'PB' . ' ' .  $convertirPetaByte->originalData($_POST['dato1'], $_POST['valor']);
       
    }elseif(isset($_POST['limpiar'])){
        header("Location:index.php");
    } else {
        $resultado = "Dato no Valido";
    }
}
  // Considera eliminar la opcion de convertir de monedas iguales----

?>