<?php

// referencia para las medidas: https://www.techspot.com/news/68482-quickly-convert-between-storage-size-units-kb-mb.html
// conversor en linea para test: https://www.calculatorsoup.com/calculators/conversions/computerstorage.php#:~:text=Here%2C%201%20kilobyte%20%3D%201024%20bytes,gigajoule%20%3D%201000%20megajoules%2C%20etc.

interface ConversorDatos { 
    public function originalData($original, $valor);
    
}

class toByte implements ConversorDatos {
    
    // Kilobyte to Byte ----- [amount] / 1000 
    // Megabyte to Byte ----- [amount] / 1E+6
    // Gigabyte to Byte ----- [amount] / 1E+9
    // Terabyte to Byte ----- [amount] / 1E+12
    // Petabyte to Byte ----- [amount] / 1E+15

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;
        
        if(!empty($this->valor)){
            if($original == "KB" ){
                $resultado = $this->valor * 1024;
                return $resultado;
            } elseif ($original == "MB") { 
                $resultado = ($this->valor * 1024) * 1024;
                return $resultado;
            } elseif ($original == "GB") { 
                $resultado = (($this->valor * 1024) * 1024) * 1024;
                return $resultado;
            } elseif ($original == "TB") { 
                $resultado = ((($this->valor * 1024) * 1024) * 1024) * 1024;
                return $resultado;
            } elseif ($original == "PB") { 
                $resultado = (((($this->valor * 1024) * 1024) * 1024) * 1024) * 1024;
                return $resultado;
            } elseif($original == "B"){
                return $resultado =  "Misma unidad de datos";
            } else {
                echo "Este valor no existe";
            }
    
        } elseif(empty($this->valor)){
        $resultado = false;
        }
    }
}

#======================================================================================================================

class toKilobyte implements ConversorDatos {
    
    //Byte to Kilobyte ----- [amount] * 1000 
    //Megabyte to Kilobyte  ----- [amount] / 1000
    //Gigabyte to Kilobyte  ----- [amount] / 1E+6
    //Terabyte to Kilobyte  ----- [amount] / 1E+9
    //Petabyte to Kilobyte  ----- [amount] / 1E+12

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "B" ){
                $resultado = $this->valor / 1024;
                return $resultado;
            } elseif ($original == "MB") { 
                $resultado = $this->valor * 1024;
                return $resultado;
            } elseif ($original == "GB") { 
                $resultado = ($this->valor * 1024) * 1024;
                return $resultado;
            } elseif ($original == "TB") { 
                $resultado = (($this->valor * 1024) * 1024) * 1024;
                return $resultado;
            } elseif ($original == "PB") { 
                $resultado = ((($this->valor * 1024) * 1024) * 1024) * 1024;
                return $resultado;
            } elseif($original == "KB"){
                return $resultado =  "Misma unidad de datos";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}  

#===================================================================================================================

class toMegabyte implements ConversorDatos {
    
    // Byte to Megabyte ----- [amount] * 1E+6  
    // Kilobyte to Megabyte  ----- [amount] * 1000 
    // Gigabyte to Megabyte ----- [amount] / 1000
    // Terabyte to Megabyte  ----- [amount] / 1E+6
    // Petabyte to Megabyte  ----- [amount] / 1E+9

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "B" ){
                $resultado = ($this->valor / 1024) / 1024;
                return $resultado;
            } elseif ($original == "KB") { 
                $resultado = $this->valor / 1024;
                return $resultado;
            } elseif ($original == "GB") { 
                $resultado = $this->valor * 1024;
                return $resultado;
            } elseif ($original == "TB") { 
                $resultado = ($this->valor * 1024) * 1024;
                return $resultado;
            } elseif ($original == "PB") { 
                $resultado = (($this->valor * 1024) * 1024) * 1024;
                return $resultado;
            } elseif($original == "MB"){
                return $resultado =  "Misma unidad de datos";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

//=================================================================================================================================

class toGigabyte implements ConversorDatos {
    
    // Byte to Gigabyte ----- [amount] * 1E+9  
    // Kilobyte  to Gigabyte ----- [amount] * 1e+6 
    // Megabyte- to Gigabyte ---- [amount] * 1000
    // Terabyte to Gigabyte ----- [amount] / 1000
    // Petabyte to Gigabyte ----- [amount] / 1E+6

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "B" ){
                $resultado = ((($this->valor / 1024) / 1024) / 1024);
                return $resultado;
            } elseif ($original == "KB") { 
                $resultado = (($this->valor / 1024) / 1024);
                return $resultado;
            } elseif ($original == "MB") { 
                $resultado = $this->valor / 1024;
                return $resultado;
            } elseif ($original == "TB") { 
                $resultado = $this->valor * 1024;
                return $resultado;
            } elseif ($original == "PB") { 
                $resultado = ($this->valor * 1024) * 1024;
                return $resultado;
            } elseif($original == "GB"){
                return $resultado =  "Misma unidad de datos";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

//==============================================================================================================

class toTerabyte implements ConversorDatos {
    
    // Byte  to Terabyte ----- [amount] / 1,000,000 
    // Kilobyte to Terabyte ----- [amount] / 1000
    // Megabyte to Terabyte----- [amount] / 0.001
    // Gigabyte to Terabyte ----- [amount] / 0.000001
    // Petabyte to Terabyte ----- [amount] / 0.000000001

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "B" ){
                $resultado = (((($this->valor / 1024) / 1024) / 1024) / 1024);
                return $resultado;
            } elseif ($original == "KB") { 
                $resultado = ((($this->valor / 1024) / 1024) / 1024);
                return $resultado;
            } elseif ($original == "MB") { 
                $resultado = (($this->valor / 1024) / 1024);
                return $resultado;
            } elseif ($original == "GB") { 
                $resultado = $this->valor / 1024;
                return $resultado;
            } elseif ($original == "PB") { 
            $resultado = $this->valor * 1024;
                return $resultado;
            } elseif($original == "TB"){
                return $resultado =  "Misma unidad de datos";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

//==================================================================================================================================

class toPetabyte implements ConversorDatos {
    
    // Byte  to Petabyte ----- [amount] * 1E+15  
    // Kilobyte to Petabyte  ----- [amount] * 1E+12
    // Megabyte to Petabyte ----- [amount] * 1E+9 
    // Gigabyte to Petabyte  ----- [amount] * 1E+6
    // Terabyte to Petabyte  ----- [amount] * 1000

    public function originalData($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "B" ){
                $resultado = ((((($this->valor / 1024) / 1024) / 1024) / 1024) / 1024);
                return $resultado;
            } elseif ($original == "KB") { 
                $resultado = (((($this->valor / 1024) / 1024) / 1024) / 1024);
                return $resultado;
            } elseif ($original == "MB") { 
                $resultado = ((($this->valor / 1024) / 1024) / 1024);
                return $resultado;
            } elseif ($original == "GB") { 
                $resultado = (($this->valor / 1024) / 1024);
                return $resultado;
            } elseif ($original == "TB") { 
                $resultado = ($this->valor / 1024);
                return $resultado;
            } elseif($original == "PB"){
                return $resultado =  "Misma unidad de datos";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

?>