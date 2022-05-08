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

    } elseif ($moneda2 == 'yen') {

        $convertirAYen = new toYen();
        $resultado = '¥' . ' ' . $convertirAYen->originalCurrency($_POST['moneda1'], $_POST['valor']);

    } elseif ($moneda2 == 'us$') {

        $convertir_a_USD = new toUSD();
        $resultado = 'USD$' . ' ' .  $convertir_a_USD->originalCurrency($_POST['moneda1'], $_POST['valor']);
        
    } elseif ($moneda2 == 'ca$') {

        $convertir_a_CAD = new toCAD();
        $resultado = 'CAD$' . ' ' .  $convertir_a_CAD->originalCurrency($_POST['moneda1'], $_POST['valor']);
        
    } elseif ($moneda2 == 'mxp') {

        $convertir_a_MXN = new toMXN();
        $resultado = 'MXN$' . ' ' .  $convertir_a_MXN->originalCurrency($_POST['moneda1'], $_POST['valor']);
        
    } else {
        $resultado = "Moneda no valida";
    }
}
?>