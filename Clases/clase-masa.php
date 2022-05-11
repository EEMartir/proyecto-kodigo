<?php

interface Conversor { 
    public function originalMass($original, $valor);
}

class toMiligramo implements Conversor {

    //Miligramo to Gramo ----- [amount] / 1000  
    //Miligramo to Kilogramo ----- [amount] /1E+6
    //Miligramo to Tonelada----- [amount] / 1E+9 
    //Miligramo to Libra ----- [amount] / 453592
    //Miligramo to Onza ----- [amount] / 28350

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if($original == "Gramo" ){
            $resultado = $valor / 1000;
            return $resultado;
        } elseif ($original == "Kilogramo") { 
            $resultado = $valor / 1e+6;
            return $resultado;
        } elseif ($original == "Tonelada") { 
            $resultado = $valor / 1e+9;
            return $resultado;
        } elseif ($original == "Libra") { 
            $resultado = $valor / 453592;
            return $resultado;
        } elseif($original == "Onza"){
            $resultado = $valor / 28350;
            return $resultado;
        } elseif($original == "Miligramo"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    }
}

class toGramo implements Conversor {

    //Gramo to Miligramo ----- [amount] * 1000  
    //Gramo to Kilogramo ----- [amount] / 1000
    //Gramo to Tonelada----- [amount] / 1E+6 
    //Gramo to Libra ----- [amount] / 454
    //Gramo to Onza ----- [amount] / 28.35

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if($original == "miligramo" ){
            $resultado = $valor * 1000;
            return $resultado;
        } elseif ($original == "kilogramo") { 
            $resultado = $valor / 1000;
            return $resultado;
        } elseif ($original == "tonelada") { 
            $resultado = $valor / 1e+6;
            return $resultado;
        } elseif ($original == "libra") { 
            $resultado = $valor / 454;
            return $resultado;
        } elseif($original == "onza"){
            $resultado = $valor / 28.35;
            return $resultado;
        } elseif($original == "Gramo"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    }
}

class toKilogramo implements Conversor {

    //Kilogramo to Miligramo ----- [amount] * 1E+6  
    //Kilogramo to Gramo ----- [amount] * 1000
    //Kilogramo to Tonelada----- [amount] / 1000 
    //Kilogramo to Libra ----- [amount] * 2.205
    //Kilogramo to Onza ----- [amount] * 35.274

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if($original == "miligramo" ){
            $resultado = $valor * 1e+6;
            return $resultado;
        } elseif ($original == "gramo") { 
            $resultado = $valor * 1000;
            return $resultado;
        } elseif ($original == "tonelada") { 
            $resultado = $valor / 1000;
            return $resultado;
        } elseif ($original == "libra") { 
            $resultado = $valor * 2.205;
            return $resultado;
        } elseif($original == "onza"){
            $resultado = $valor * 35.274;
            return $resultado;
        } elseif($original == "Kilogramo"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    }
}

class toTonelada implements Conversor {

    //Tonelada to Miligramo ----- [amount] * 1E+9  
    //Tonelada to Gramo ----- [amount] * 1E+6
    //Tonelada to Kilogramo----- [amount] * 1000 
    //Tonelada to Libra ----- [amount] * 2205
    //Tonelada to Onza ----- [amount] * 35274

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if($original == "miligramo" ){
            $resultado = $valor * 1e+9;
            return $resultado;
        } elseif ($original == "gramo") { 
            $resultado = $valor * 1e+6;
            return $resultado;
        } elseif ($original == "kilogramo") { 
            $resultado = $valor * 1000;
            return $resultado;
        } elseif ($original == "libra") { 
            $resultado = $valor * 2205;
            return $resultado;
        } elseif($original == "onza"){
            $resultado = $valor * 35274;
            return $resultado;
        } elseif($original == "Tonelada"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    }
}

class toLibra implements Conversor {

    //Libra to Miligramo ----- [amount] * 453592  
    //Libra to Gramo ----- [amount] * 454
    //Libra to Kilogramo----- [amount] / 2.205 
    //Libra to Tonelada ----- [amount] / 2205
    //Libra to Onza ----- [amount] * 16

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if($original == "miligramo" ){
            $resultado = $valor * 453592;
            return $resultado;
        } elseif ($original == "gramo") { 
            $resultado = $valor * 454;
            return $resultado;
        } elseif ($original == "kilogramo") { 
            $resultado = $valor / 2.205;
            return $resultado;
        } elseif ($original == "tonelada") { 
            $resultado = $valor / 2205;
            return $resultado;
        } elseif($original == "onza"){
            $resultado = $valor * 16;
            return $resultado;
        } elseif($original == "Libra"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    }
}

class toOnza implements Conversor {

    //Onza to Miligramo ----- [amount] * 28350  
    //Onza to Gramo ----- [amount] * 28.35
    //Onza to Kilogramo----- [amount] / 35.274 
    //Onza to Libra ----- [amount] / 16
    //Onza to Tonelada ----- [amount]  35274

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if($original == "miligramo" ){
            $resultado = $valor * 28350;
            return $resultado;
        } elseif ($original == "gramo") { 
            $resultado = $valor * 28.35;
            return $resultado;
        } elseif ($original == "kilogramo") { 
            $resultado = $valor / 35.274;
            return $resultado;
        } elseif ($original == "tonelada") { 
            $resultado = $valor / 35274;
            return $resultado;
        } elseif($original == "libra"){
            $resultado = $valor / 16;
            return $resultado;
        } elseif($original == "Onza"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    }
}

?>