<?php
require 'Clases/clase-longitud.php';

$resultado = false;

if(isset($_POST['longitud1']) &&
    isset($_POST['longitud2']) &&
    isset($_POST['valor']) &&
    isset($_POST['convertir'])){

    $longitud1 = $_POST['longitud1'];
    $longitud2 = $_POST['longitud2'];
    $valor = $_POST['valor'];
    $convertir = $_POST['convertir'];

    if($longitud2 == 'mm') {

      $convertToMillimeters = new ToMillimeters();
      $resultado = $convertToMillimeters->originalLongitud($_POST['longitud1'], $_POST['valor']);
    } elseif ($longitud2 == 'cm') {
      $convertToCentimeters = new ToCentimeters();
      $resultado = $convertToCentimeters->originalLongitud($_POST['longitud1'], $_POST['valor']);

    } elseif ($longitud2 == 'dm') {
      $convertToDecimeters = new ToDecimeters();
      $resultado = $convertToDecimeters->originalLongitud($_POST['longitud1'], $_POST['valor']);
    } elseif ($longitud2 == 'hm') {
      $convertToHectometers = new ToHectometers();
      $resultado = $convertToHectometers->originalLongitud($_POST['longitud1'], $_POST['valor']);
    } elseif ($longitud2 == 'km') {
      $convertToKilometers = new ToKilometers();
      $resultado = $convertToKilometers->originalLongitud($_POST['longitud1'], $_POST['valor']);
    } else {
      $resultado = "Longitud no valida";
    }
 }





?>