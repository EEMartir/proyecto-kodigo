<?php 
require 'Clases/clase-tiempo.php';

$resultado = false;

if(isset($_POST['tiempo1']) &&
    isset($_POST['tiempo2']) &&
    isset($_POST['valor']) &&
    isset($_POST['convertir'])){

    $tiempo1 = $_POST['tiempo1'];
    $tiempo2 = $_POST['tiempo2'];
    $valor = $_POST['valor'];
    $convertir = $_POST['convertir'];

    if($tiempo2 == 'seg') {

      $convertToSeconds = new ToSeconds();
      $resultado = $convertToSeconds->originalTiempo($_POST['tiempo1'], $_POST['valor']);

    } elseif ($tiempo2 == 'min') {
      $convertToMinutes = new ToMinutes();
      $resultado = $convertToMinutes->originalTiempo($_POST['tiempo1'], $_POST['valor']);
    } elseif ($tiempo2 == 'h') {
      $convertToHours = new ToHours();
      $resultado = $convertToHours->originalTiempo($_POST['tiempo1'], $_POST['valor']);
    } elseif ($tiempo2 == 'd') {
      $convertToDays = new ToDays();
      $resultado = $convertToDays->originalTiempo($_POST['tiempo1'], $_POST['valor']);
    } elseif ($tiempo2 == 'm') {
      $convertToMonths = new ToMonths();
      $resultado = $convertToMonths->originalTiempo($_POST['tiempo1'], $_POST['valor']);
    } else {
      $resultado = "Tiempo no valido";
    }
  }

?>