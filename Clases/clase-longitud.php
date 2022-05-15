<?php

interface ConversorLongitud {
  public function originalLongitud($original, $valor);
}


class ToMillimeters implements ConversorLongitud {
  //centimetres to millimeters ----- [amount] * 10
  //hectometres to millimeters ----- [amount] * 100000
  //meter to millimeters ----- [amount] * 1000
  //Kilometres to millimeters ----- [amount] * 1000000
  //decimetres to millimeters ----- [amount] * 100

  public function originalLongitud($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;
    
    if(!empty($this->valor)){
    switch ($original) {
      case 'cm':
        return $resultado = $valor * 10;
        break;
      case 'dm':
        return $resultado = $valor * 100;
        break;
      case 'hm':
        return $resultado = $valor * 100000;
        break;
      case 'km':
        return $resultado = $valor * 1000000;
        break;
      case 'm':
        return $resultado = $valor * 1000;
        break;
        case 'mm':
        return $resultado = "Misma unidad de longitud";
        break;
        case (empty($original) || empty($valor)):
        return $resultado = false;
      default:
        echo "Longitud no valida";
        break;

    }
  }elseif(empty($this->valor)){
    $resultado = false;
    }
  }
}

class ToCentimeters implements ConversorLongitud {
  //millimeters to centimetres ----- [amount] / 10
  //hectometres to centimetres ----- [amount] * 10000
  //meter to centimetres ----- [amount] * 100
  //Kilometres to centimetres ----- [amount] * 100000
  //decimetres to centimetres ----- [amount] * 10

  public function originalLongitud($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    switch ($original) {
      case 'mm':
        return $resultado = $valor / 10;
        break;
      case 'dm':
        return $resultado = $valor * 10;
        break;
      case 'hm':
        return $resultado = $valor * 10000;
        break;
      case 'km':  
        return $resultado = $valor * 100000;
        break;
      case 'm':
        return $resultado = $valor * 100;
        break;
      case 'cm':
        return $resultado = "Misma unidad de longitud";
        break;
      case (empty($original) || empty($valor)):
        return $resultado = false;
        break;
      default:
      echo "Longitud no valida";
        break;

      }
    } elseif(empty($this->valor)){
      $resultado = false;
    }
  }
}

class ToMeters implements ConversorLongitud {
  //millimeters to meters ----- [amount] / 1000
  //centimetres to meters ----- [amount] / 100
  //hectometres to meters ----- [amount] * 1000
  //Kilometres to meters ----- [amount] * 1000
  //decimetres to meters ----- [amount] / 10

  public function originalLongitud($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    switch ($original) {
      case 'mm':
        return $resultado = $valor / 1000;
        break;
      case 'cm':
        return $resultado = $valor / 100;
        break;
      case 'hm':
        return $resultado = $valor * 1000;
        break;
      case 'km':
        return $resultado = $valor * 1000;
        break;
      case 'dm':
        return $resultado = $valor / 10;
        break;
      case 'm':
        return $resultado = "Misma unidad de longitud";
        break;
      case (empty($original) || empty($valor)):
        return $resultado = false;
        break;
      default:
      echo "Longitud no valida";
        break;

      }
    } elseif(empty($this->valor)){
      $resultado = false;
    }
  }
}

class ToDecimeters implements ConversorLongitud {
  //millimeters to decimetres ----- [amount] / 100
  //hectometres to decimetres ----- [amount] * 1000
  //meter to decimetres ----- [amount] * 10
  //Kilometres to decimetres ----- [amount] * 10000
  //centimetres to decimetres ----- [amount] / 10

  public function originalLongitud($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    switch ($original) {
      case 'mm':
        return $resultado = $valor / 100;
        break;
      case 'cm':
        return $resultado = $valor / 10;
        break;
      case 'hm':
        return $resultado = $valor * 1000;
        break;  
      case 'km':
        return $resultado = $valor * 10000;
        break;
      case 'm':
        return $resultado = $valor * 10;
        break;
      case 'dm':
        return $resultado = "Misma unidad de longitud";
        break;
        case(empty($original) || empty($valor)):
        return $resultado = false;
        break;
      default:
      echo "Longitud no valida";
        break;
    }
  } elseif(empty($this->valor)){
    $resultado = false;
  }
    }
}

class ToHectometers implements ConversorLongitud {
  //millimeters to hectometres ----- [amount] / 100000
  //centimetres to hectometres ----- [amount] / 10000
  //decimetres to hectometres ----- [amount] / 1000
  //meter to hectometres ----- [amount] / 100
  //Kilometres to hectometres ----- [amount] * 10

  public function originalLongitud($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    switch ($original) {
      case 'mm':
        return $resultado = $valor / 100000;
        break;
      case 'cm':
        return $resultado = $valor / 10000;
        break;
      case 'dm':
        return $resultado = $valor / 1000;
        break;
      case 'm':
        return $resultado = $valor / 100;
        break;
      case 'km':
        return $resultado = $valor * 10;
        break;
      case 'hm':
        return $resultado = "Misma unidad de longitud";
        break;
      case (empty($original) || empty($valor)):
        return $resultado = false;
        break;
      default:
      echo "Longitud no valida";
        break;
    }
  } elseif(empty($this->valor)){
    $resultado = false;
  
  }
  }

}

class ToKilometers implements ConversorLongitud {
  //millimeters to kilometers ----- [amount] / 1000000
  //centimetres to kilometers ----- [amount] / 100000
  //decimetres to kilometers ----- [amount] / 10000
  //meter to kilometers ----- [amount] / 1000
  //hectometres to kilometers ----- [amount] / 10

  public function originalLongitud($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    switch ($original) {
      case 'mm':
        return $resultado = $valor / 1000000;
        break;
      case 'cm':
        return $resultado = $valor / 100000;
        break;
      case 'dm':
        return $resultado = $valor / 10000;
        break;
      case 'm':
        return $resultado = $valor / 1000;
        break;
      case 'hm':
        return $resultado = $valor / 10;
        break;
      case 'km':
        return $resultado = "Misma unidad de longitud";
        break;
      case (empty($original) || empty($valor)):
        return $resultado = false;
        break;
      default:
      echo "Longitud no valida";
        break;
        
    }
  } elseif(empty($this->valor)){
    $resultado = false;
  }
  }
}

?>