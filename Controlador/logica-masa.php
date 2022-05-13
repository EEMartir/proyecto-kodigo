<?php

require 'Clases/clase-masa.php';

$resultado = false;

if(isset($_POST['masa1']) && 
   isset($_POST['masa2']) && 
   isset($_POST['valor']) && 
   isset($_POST['convertir'])){ //Si existen masa1, valor y se ha usado el boton convertir.

    $masa1 = $_POST['masa1'];
    $masa2 = $_POST['masa2'];
    $valor = $_POST['valor'];
    $convertir = $_POST['convertir'];
    
    if($masa2 == 'Miligramo') { 

        $convertirMiligramo = new toMiligramo();
        $resultado = 'Mg' . ' ' . $convertirMiligramo->originalMass($masa1, $valor);

    } elseif ($masa2 == 'Gramo') {

       $convertirGramo = new toGramo();
       $resultado = 'G' . ' ' . $convertirGramo->originalMass($_POST['masa1'], $_POST['valor']);

    } elseif ($masa2 == 'Kilogramo') {

        $convertirKilogramo = new toKilogramo();
        $resultado = 'KG' . ' ' .  $convertirKilogramo->originalMass($_POST['masa1'], $_POST['valor']);
        
    }elseif ($masa2 == 'Tonelada') {

        $convertirTonelada = new toTonelada();
        $resultado = 'T' . ' ' .  $convertirTonelada->originalMass($_POST['masa1'], $_POST['valor']);
        
    } elseif ($masa2 == 'Libra') {

        $convertirLibra = new toLibra();
        $resultado = 'Lb' . ' ' .  $convertirLibra->originalMass($_POST['masa1'], $_POST['valor']);
    
    } elseif ($moneda2 == 'PetaByte') {

        $convertirOnza = new toOnza();
        $resultado = 'Oz' . ' ' .  $convertirOnza->originalMass($_POST['masa1'], $_POST['valor']);
       
    } else {
        $resultado = "Peso no Valido";
    }
}
  // Considera eliminar la opcion de convertir de monedas iguales----

?>