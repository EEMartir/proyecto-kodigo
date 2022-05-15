<?php

interface Conversor { 
    public function originalData($original, $valor);
    
}

class toByte implements Conversor {
    
    //Byte to Kilobyte ----- [amount] / 1000 
    //Byte to Megabyte ----- [amount] / 1E+6
    //Byte to Gigabyte ----- [amount] / 1E+9
    //Byte to Terabyte ----- [amount] / 1E+12
    //Byte to Petabyte ----- [amount] / 1E+15

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;
        
        if(!empty($this->valor)){
            if($original == "KB" ){
                $resultado = $this->valor / 1000;
                return $resultado;
            } elseif ($original == "MB") { 
                $resultado = $this->valor / 1E+6;
                return $resultado;
            } elseif ($original == "GB") { 
                $resultado = $this->valor / 1E+9;
                return $resultado;
            } elseif ($original == "TB") { 
                $resultado = $this->valor / 1E+12;
                return $resultado;
            } elseif ($original == "PB") { 
                $resultado = $this->valor / 1E+15;
                return $resultado;
            } elseif($original == "Byte"){
                return "No contiene suficiente datos";
            } else {
                echo "Este valor no existe";
            }
    
        } elseif(empty($this->valor)){
        $resultado = false;
        }
    }
}

#======================================================================================================================

class toKilobyte implements Conversor {
    
    //Kilobyte to Byte ----- [amount] * 1000 
    //Kilobyte to Megabyte ----- [amount] / 1000
    //Kilobyte to Gigabyte ----- [amount] / 1E+6
    //Kilobyte to Terabyte ----- [amount] / 1E+9
    //Kilobyte to Petabyte ----- [amount] / 1E+12

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "B" ){
                $resultado = $this->valor * 1000;
                return $resultado;
            } elseif ($original == "MB") { 
                $resultado = $this->valor / 1000;
                return $resultado;
            } elseif ($original == "GB") { 
                $resultado = $this->valor / 1E+6;
                return $resultado;
            } elseif ($original == "TB") { 
                $resultado = $this->valor / 1E+9;
                return $resultado;
            } elseif ($original == "PB") { 
                $resultado = $this->valor / 1E+12;
                return $resultado;
            } elseif($original == "Kilobyte"){
                return "No contiene suficiente datos";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}  

#===================================================================================================================

class toMegabyte implements Conversor {
    
    //Megabyte to Byte ----- [amount] * 1E+6  
    //Megabyte to Kilobyte ----- [amount] * 1000 
    //Megabyte to Gigabyte----- [amount] / 1000
    //Megabyte to Terabyte ----- [amount] / 1E+6
    //Megabyte to Petabyte ----- [amount] / 1E+9

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "B" ){
                $resultado = $this->valor * 1e+6;
                return $resultado;
            } elseif ($original == "KB") { 
                $resultado = $this->valor * 1000;
                return $resultado;
            } elseif ($original == "GB") { 
                $resultado = $this->valor / 1000;
                return $resultado;
            } elseif ($original == "TB") { 
                $resultado = $this->valor / 1E+6;
                return $resultado;
            } elseif ($original == "PB") { 
                $resultado = $this->valor / 1E+9;
                return $resultado;
            } elseif($original == "MegaByte"){
                return "No contiene suficiente datos";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

//=================================================================================================================================

class toGigabyte implements Conversor {
    
    //Gigabyte to Byte ----- [amount] * 1E+9  
    //Gigabyte to Kilobyte ----- [amount] * 1e+6 
    //Gigabyte to Megabyte----- [amount] * 1000
    //Gigabyte to Terabyte ----- [amount] / 1000
    //Gigabyte to Petabyte ----- [amount] / 1E+6

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "B" ){
                $resultado = $this->valor * 1e+9;
                return $resultado;
            } elseif ($original == "KB") { 
                $resultado = $this->valor * 1E+6;
                return $resultado;
            } elseif ($original == "MB") { 
                $resultado = $this->valor * 1000;
                return $resultado;
            } elseif ($original == "TB") { 
                $resultado = $this->valor / 1000;
                return $resultado;
            } elseif ($original == "PB") { 
                $resultado = $this->valor / 1E+6;
                return $resultado;
            } elseif($original == "GigaByte"){
                return "No contiene suficiente datos";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

//==============================================================================================================

class toTerabyte implements Conversor {
    
    //Terabyte to Byte ----- [amount] / 1,000,000 
    //Terabyte to Kilobyte ----- [amount] / 1000
    //Terabyte to Megabyte----- [amount] / 0.001
    //Terabyte to Gigabyte ----- [amount] / 0.000001
    //Terabyte to Petabyte ----- [amount] / 0.000000001

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "B" ){
                $resultado = $this->valor * 1E+12;
                return $resultado;
            } elseif ($original == "KB") { 
                $resultado = $this->valor * 1E+9;
                return $resultado;
            } elseif ($original == "MB") { 
                $resultado = $this->valor * 1E+6;
                return $resultado;
            } elseif ($original == "GB") { 
                $resultado = $this->valor * 1000;
                return $resultado;
            } elseif ($original == "PB") { 
            $resultado = $this->valor / 1000;
                return $resultado;
            } elseif($original == "TeraByte"){
                return "No contiene suficiente datos";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

//==================================================================================================================================

class toPetabyte implements Conversor {
    
    //Petabyte to Byte ----- [amount] * 1E+15  
    //Petabyte to Kilobyte ----- [amount] * 1E+12
    //Petabyte to Megabyte----- [amount] * 1E+9 
    //Petabyte to Gigabyte ----- [amount] * 1E+6
    //Petabyte to Terabyte ----- [amount] * 1000

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "B" ){
                $resultado = $this->valor * 1E+15;
                return $resultado;
            } elseif ($original == "KB") { 
                $resultado = $this->valor * 1E+12;
                return $resultado;
            } elseif ($original == "MB") { 
                $resultado = $this->valor * 1E+9;
                return $resultado;
            } elseif ($original == "GB") { 
                $resultado = $this->valor * 1E+6;
                return $resultado;
            } elseif ($original == "TB") { 
                $resultado = $this->valor * 1000;
                return $resultado;
            } elseif($original == "PetaByte"){
                return "No contiene suficiente datos";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

?>