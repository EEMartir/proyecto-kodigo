<?php


interface ConversorTiempo {
  public function originalTiempo($original, $valor);

}

class ToSeconds implements ConversorTiempo {
  // minutes to seconds ----- [amount] * 60
  // hours to seconds ----- [amount] * 3600
  // days to seconds ----- [amount] * 86400
  // weeks to seconds ----- [amount] * 604800
  // months to seconds ----- [amount] * 2678400

  public function originalTiempo($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    if($original == "seg") {
      return "Misma unidad de tiempo";
  } elseif ($original == "min") {
      $resultado = $valor * 60;
      return $resultado;
  } elseif ($original == "h") {
      $resultado = $valor * 3600;
      return $resultado;

  } elseif ($original == "d") {
      $resultado = $valor * 86400;
      return $resultado;
  } elseif ($original == "sm") {
      $resultado = $valor * 604800;
      return $resultado;
  } elseif($original == "m") {
      $resultado = $valor * 2678400;
      return $resultado;
  } else {
      return "Tiempo no valido";
  }
}elseif(empty($this->valor)){
  $resultado = false;
}
}
}

class ToMinutes implements ConversorTiempo {
  // seconds to minutes ----- [amount] / 60
  // hours to minutes ----- [amount] * 60
  // days to minutes ----- [amount] * 1440
  // weeks to minutes ----- [amount] * 10080
  // months to minutes ----- [amount] * 43829.2

  public function originalTiempo($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    switch ($original) {
      case 'seg':
        return $resultado = $valor / 60;
        break;
      case 'min':
        return $resultado = "Misma unidad de tiempo";
        break;
      case 'h':
        return $resultado = $valor * 60;
        break;
      case 'd':
        return $resultado = $valor * 1440;
        break;
      case 'sm':
        return $resultado = $valor * 10080;
        break;
      case 'm':
        return $resultado = $valor * 43829.2;
        break;
      case (empty($original) || empty($valor)):
        return $resultado = false;
        break;
      default:
        echo "Este valor no existe";
        break;
    }
  }elseif(empty($this->valor)){
    $resultado = false;
  }
  }
}

class ToHours implements ConversorTiempo {
  // seconds to hours ----- [amount] / 3600
  // minutes to hours ----- [amount] / 60
  // days to hours ----- [amount] * 24
  // weeks to hours ----- [amount] * 168
  // months to hours ----- [amount] * 730.48

  public function originalTiempo($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    switch ($original) {
      case 'seg':
        return $resultado = $valor / 3600;
        break;
      case 'min':
        return $resultado = $valor / 60;
        break;
      case 'h':
        return $resultado = "Misma unidad de tiempo";
        break;
      case 'd':
        return $resultado = $valor * 24;
        break;
      case 'sm':
        return $resultado = $valor * 168;
        break;
      case 'm':
        return $resultado = $valor * 730.48;
        break;      
      default:
        echo "Este valor no existe";
        break;

    }
  }elseif(empty($this->valor)){
    $resultado = false;
  }
  }
  }


class ToDays implements ConversorTiempo {
  // seconds to days ----- [amount] / 86400
  // minutes to days ----- [amount] / 1440
  // hours to days ----- [amount] / 24
  // weeks to days ----- [amount] * 7
  // months to days ----- [amount] * 30.4375

  public function originalTiempo($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    switch ($original) {
      case 'seg':
        return $resultado = $valor / 86400;
        break;
      case 'min':
       return $resultado = $valor / 1440;
        break;
      case 'h':
        return $resultado = $valor / 24;
        break;
      case 'd':
        return $resultado = "Misma unidad de tiempo";
        break;
      case 'sm':
         return $resultado = $valor * 7;
        break;
      case 'm':
       return  $resultado = $valor * 30.4375;
        break;
      case (empty($original) || empty($valor)):
        return $resultado = false;
        break;
      default:
        echo "Este valor no existe";
        break;
    }
  }elseif(empty($this->valor)){
    $resultado = false;
  }
  }
  }


class ToWeeks implements ConversorTiempo {
  // seconds to weeks ----- [amount] / 604800
  // minutes to weeks ----- [amount] / 10080
  // hours to weeks ----- [amount] / 168
  // days to weeks ----- [amount] / 7
  // months to weeks ----- [amount] * 4.34812

  public function originalTiempo($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    switch ($original) {
      case 'seg':
        return $resultado = $valor / 604800;
        break;
      case 'min':
        return $resultado = $valor / 10080;
        break;
      case 'h':
        return $resultado = $valor / 168;
        break;
      case 'd':
        return $resultado = $valor / 7;
        break;
      case 'sm':
        return $resultado = "Misma unidad de tiempo";
        break;
      case 'm':
        return $resultado = $valor * 4.34812;
        break;
      case (empty($original) || empty($valor)):
        return $resultado = false;
        break;
      default:
        echo "Este valor no existe";
        break;
        
    }
  }elseif(empty($this->valor)){
    $resultado = false;
  }
  
  }
}

class ToMonths implements ConversorTiempo {
  // seconds to months ----- [amount] / 2678400
  // minutes to months ----- [amount] / 43829.2
  // hours to months ----- [amount] / 730.48
  // days to months ----- [amount] / 30.4375
  // weeks to months ----- [amount] / 4.34812

  public function originalTiempo($original, $valor) {
    $this->original = $original;
    $this->valor = $valor;

    if(!empty($this->valor)){
    switch ($original) {
      case 'seg':
        return $resultado = $valor / 2678400;
        break;
      case 'min':
        return $resultado = $valor / 43829.2;
        break;
      case 'h':
        return $resultado = $valor / 730.48;
        break;
      case 'd':
        return $resultado = $valor / 30.4375;
        break;
      case 'sm':
        return $resultado = $valor / 4.34812;
        break;
      case 'm':
        return $resultado = "Misma unidad de tiempo";
        break;
      case (empty($original) || empty($valor)):
        return $resultado = false;
        break;
      default:
        echo "Este valor no existe";
        break;

    }
  }elseif(empty($this->valor)){
    $resultado = false;
  
  }
  }
}


?>