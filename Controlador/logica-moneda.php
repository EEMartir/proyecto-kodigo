<?php

require 'Clases/clase-moneda.php';

$resultado = false;

if(isset($_POST['moneda1']) && 
   isset($_POST['moneda2']) && 
   isset($_POST['valor']) && 
   isset($_POST['convertir'])){

    $moneda1 = $_POST['moneda1'];
    $moneda2 = $_POST['moneda2'];
    $valor = $_POST['valor'];
    $convertir = $_POST['convertir'];
    
    if($moneda2 == 'euro') { 

        $convertiraEuro = new toEuro();
        $resultado = '€' . ' ' . $convertiraEuro->originalCurrency($moneda1, $valor);

    } elseif ($moneda2 == 'arg') {

        $convertirAYen = new toArg();
        $resultado = 'ARS$' . ' ' . $convertirAYen->originalCurrency($moneda1, $valor);

    } elseif ($moneda2 == 'us$') {

        $convertir_a_USD = new toUSD();
        $resultado = 'USD$' . ' ' .  $convertir_a_USD->originalCurrency($moneda1, $valor);
        
    } elseif ($moneda2 == 'ca$') {

        $convertir_a_CAD = new toCAD();
        $resultado = 'CAD$' . ' ' .  $convertir_a_CAD->originalCurrency($moneda1, $valor);
        
    } elseif ($moneda2 == 'mxp') {

        $convertir_a_MXN = new toMXN();
        $resultado = 'MXN$' . ' ' .  $convertir_a_MXN->originalCurrency($moneda1, $valor);
        
    } elseif(isset($_POST['limpiar'])){
            header("Location:index.php");
    } else {
        $resultado = "Moneda no valida";
    }
}
?>