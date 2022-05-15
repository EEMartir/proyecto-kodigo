<?php

interface Conversor { 
    public function originalMass($original, $valor);
}

class toMiligramo implements Conversor {

    //Miligramo to Gramo(G) ----- [amount] / 1000  
    //Miligramo to Kilogramo(Kg) ----- [amount] /1E+6
    //Miligramo to Tonelada(T)----- [amount] / 1E+9 
    //Miligramo to Libra(Lb) ----- [amount] / 453592
    //Miligramo to Onza(Oz) ----- [amount] / 28350

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "G" ){
            $resultado = $this->$valor / 1000;
            return $resultado;
        } elseif ($original == "Kg") { 
            $resultado = $this->$valor / 1e+6;
            return $resultado;
        } elseif ($original == "T") { 
            $resultado = $this->$valor / 1e+9;
            return $resultado;
        } elseif ($original == "Lb") { 
            $resultado = $this->$valor / 453592;
            return $resultado;
        } elseif($original == "Oz"){
            $resultado = $this->$valor / 28350;
            return $resultado;
        } elseif($original == "Mg"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    } elseif(empty($this->valor)) {
        $resultado = false;
    }
    }
}

class toGramo implements Conversor {

    //Gramo to Miligramo(Mg) ----- [amount] * 1000  
    //Gramo to Kilogramo(Kg) ----- [amount] / 1000
    //Gramo to Tonelada(T)----- [amount] / 1E+6 
    //Gramo to Libra(Lb) ----- [amount] / 454
    //Gramo to Onza(Oz) ----- [amount] / 28.35

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "Mg" ){
            $resultado = $this->$valor * 1000;
            return $resultado;
        } elseif ($original == "Kg") { 
            $resultado = $this->$valor / 1000;
            return $resultado;
        } elseif ($original == "T") { 
            $resultado = $this->$valor / 1e+6;
            return $resultado;
        } elseif ($original == "Lb") { 
            $resultado = $this->$valor / 454;
            return $resultado;
        } elseif($original == "Oz"){
            $resultado = $this->$valor / 28.35;
            return $resultado;
        } elseif($original == "G"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    } elseif(empty($this->valor)) {
        $resultado = false;
    }
    }
}

class toKilogramo implements Conversor {

    //Kilogramo to Miligramo(Mg) ----- [amount] * 1E+6  
    //Kilogramo to Gramo(G) ----- [amount] * 1000
    //Kilogramo to Tonelada(T)----- [amount] / 1000 
    //Kilogramo to Libra(Lb) ----- [amount] * 2.205
    //Kilogramo to Onza(Oz) ----- [amount] * 35.274

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "Mg" ){
            $resultado = $this->$valor * 1e+6;
            return $resultado;
        } elseif ($original == "G") { 
            $resultado = $this->$valor * 1000;
            return $resultado;
        } elseif ($original == "T") { 
            $resultado = $this->$valor / 1000;
            return $resultado;
        } elseif ($original == "Lb") { 
            $resultado = $this->$valor * 2.205;
            return $resultado;
        } elseif($original == "Oz"){
            $resultado = $this->$valor * 35.274;
            return $resultado;
        } elseif($original == "Kg"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    } elseif(empty($this->valor)) {
        $resultado = false;
    }
    }
}

class toTonelada implements Conversor {

    //Tonelada to Miligramo(Mg) ----- [amount] * 1E+9  
    //Tonelada to Gramo(G) ----- [amount] * 1E+6
    //Tonelada to Kilogramo(Kg)----- [amount] * 1000 
    //Tonelada to Libra(Lb) ----- [amount] * 2205
    //Tonelada to Onza(Oz) ----- [amount] * 35274

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "Mg" ){
            $resultado = $this->$valor * 1e+9;
            return $resultado;
        } elseif ($original == "G") { 
            $resultado = $this->$valor * 1e+6;
            return $resultado;
        } elseif ($original == "Kg") { 
            $resultado = $this->$valor * 1000;
            return $resultado;
        } elseif ($original == "Lb") { 
            $resultado = $this->$valor * 2205;
            return $resultado;
        } elseif($original == "Oz"){
            $resultado = $this->$valor * 35274;
            return $resultado;
        } elseif($original == "T"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    }  elseif(empty($this->valor)) {
        $resultado = false;
    }
    }
}

class toLibra implements Conversor {

    //Libra to Miligramo(Mg) ----- [amount] * 453592  
    //Libra to Gramo(G) ----- [amount] * 454
    //Libra to Kilogramo(Kg) ----- [amount] / 2.205 
    //Libra to Tonelada(T) ----- [amount] / 2205
    //Libra to Onza(Oz) ----- [amount] * 16

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "Mg" ){
            $resultado = $this->$valor * 453592;
            return $resultado;
        } elseif ($original == "G") { 
            $resultado = $this->$valor * 454;
            return $resultado;
        } elseif ($original == "Kg") { 
            $resultado = $this->$valor / 2.205;
            return $resultado;
        } elseif ($original == "T") { 
            $resultado = $this->$valor / 2205;
            return $resultado;
        } elseif($original == "Oz"){
            $resultado = $this->$valor * 16;
            return $resultado;
        } elseif($original == "Lb"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    } elseif(empty($this->valor)) {
        $resultado = false;
    }
    }
}

class toOnza implements Conversor {

    //Onza to Miligramo(Mg) ----- [amount] * 28350  
    //Onza to Gramo(G) ----- [amount] * 28.35
    //Onza to Kilogramo(Kg) ----- [amount] / 35.274 
    //Onza to Libra(Lb) ----- [amount] / 16
    //Onza to Tonelada(T) ----- [amount]  35274

    public function originalMass($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "Mg" ){
            $resultado = $this->$valor * 28350;
            return $resultado;
        } elseif ($original == "G") { 
            $resultado = $this->$valor * 28.35;
            return $resultado;
        } elseif ($original == "Kg") { 
            $resultado = $this->$valor / 35.274;
            return $resultado;
        } elseif ($original == "T") { 
            $resultado = $this->$valor / 35274;
            return $resultado;
        } elseif($original == "Lb"){
            $resultado = $this->$valor / 16;
            return $resultado;
        } elseif($original == "Oz"){
            return "No contiene suficiente peso";
        } else {
            echo "Este valor no existe";
        }
    } elseif(empty($this->valor)) {
        $resultado = false;
    }
    }
}

?>