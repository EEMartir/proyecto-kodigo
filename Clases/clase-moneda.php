<?php
//Referencia https://www.xe.com/es/currencyconverter/

interface ConversorMoneda { 
    public function originalCurrency($original, $valor);
}

// ==================================================================================================================
class toEuro implements ConversorMoneda {
    
    //USD to Euro ----- [amount] / $1.08 (valor actual de 1 euro a 1 dolar)
    //CAD to Euro ----- [amount] / C$ 1.36
    //Arg to Euro ----- [amount] /  122.25697
    //MXN to Euro ----- [amount] / 21,3756

    public function originalCurrency($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
            if($original == "us$" ){
                $resultado = $this->valor / 1.08;
                return $resultado;
            } elseif ($original == "ca$") { 
                $resultado = $this->valor / 1.36;
                return $resultado;
            } elseif ($original == "arg") { 
                $resultado = $this->valor / 122.25697;
                return $resultado;
            } elseif ($original == "mxp") { 
                $resultado = $this->valor / 21.3756;
                return $resultado;
            } elseif($original == "euro"){
                return $resultado =  "Misma unidad de moneda";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }


    }
}

// ==================================================================================================================
class ToArg implements ConversorMoneda {
    
    //USD to Arg ----- [amount] / 0.0085160768 (valor actual de un pero arg a un US dolar)
    //Euro to Arg ----- [amount] / EUR 0.0072559324 
    //CAD to Arg ----- [amount] / 0.0098372582
    //MXN to Arg ----- [amount] / 0.15477795

    public function originalCurrency($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){

        if($original == "us$" ){
            $resultado = $valor / 0.0085160768  ;
            return $resultado;
        } elseif ($original == "ca$") { 
            $resultado = $valor / 0.010989417;
            return $resultado;
        } elseif ($original == "euro") { 
            $resultado = $valor / 0.0081794952 ;
            return $resultado;
        } elseif ($original == "mxp") { 
            $resultado = $valor / 0.17122664;
            return $resultado;
        } elseif ($original == "arg"){
            return $resultado =  "Misma unidad de moneda";
        } else {
            echo "Este valor no existe";
        }
        }  elseif(empty($this->valor)) {
            $resultado = false;
        }

    }
}
// ==================================================================================================================

class toUSD implements ConversorMoneda {

    //CAD to USD ----- [amount] / CAD 1.2581322
    //Euro to USD ----- [amount] / EUR 0.92751168
    //Arg to USD ----- [amount] / 117.42496
    //MXN Peso to USD ----- [amount] / MXN 19.77943

    public function originalCurrency($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "arg" ){
            $resultado = $valor / 117.42496;
            return $resultado;
        } elseif ($original == "ca$") { 
            $resultado = $valor / 1.2581322;
            return $resultado;
        } elseif ($original == "euro") { 
            $resultado = $valor / 0.92751168 ;
            return $resultado;
        } elseif ($original == "mxp") { 
            $resultado = $valor / 19.77943;
            return $resultado;
        } elseif ($original == "us$"){
            return $resultado =  "Misma unidad de moneda";
        } else {
            echo "Este valor no existe";
        }
        }  elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

// ==================================================================================================================
class toCAD implements ConversorMoneda {

    //USD to CAD ----- [amount] / USD 0,79469886
    //Euro to CAD ----- [amount] / EUR 0.73744181
    //Arg to CAD ----- [amount] / 90.996645
    //MXN to CAD ----- [amount] / MXN 15.718696
    
    public function originalCurrency($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "arg" ){
            $resultado = $valor / 90.996645;
            return $resultado;
        } elseif ($original == "us$") { 
            $resultado = $valor / 0.79469886;
            return $resultado;
        } elseif ($original == "euro") { 
            $resultado = $valor / 0.73744181 ;
            return $resultado;
        } elseif ($original == "mxp") { 
            $resultado = $valor / 15.718696;
            return $resultado;
        } elseif ($original == "ca$"){
            return $resultado =  "Misma unidad de moneda";
        } else {
            echo "Este valor no existe";
        }
        }  elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}
// ==================================================================================================================

class toMXN implements ConversorMoneda {

    //USD to MXN ----- [amount] / USD 0.050559712
    //Euro to MXN ----- [amount] / EUR 0.046923072
    //Arg to MXN ----- [amount] / 5,8402129
    //CAD to MXN ----- [amount] / CAD 0.06361126
    
    public function originalCurrency($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "arg" ){
            $resultado = $valor / 5.8402129;
            return $resultado;
        } elseif ($original == "us$") { 
            $resultado = $valor / 0.050559712;
            return $resultado;
        } elseif ($original == "euro") { 
            $resultado = $valor / 0.046923072 ;
            return $resultado;
        } elseif ($original == "ca$") { 
            $resultado = $valor / 0.06361126;
            return $resultado;
        } elseif($original == "mxp"){
            return $resultado =  "Misma unidad de moneda";
        } else {
            echo "Este valor no existe";
        }
        }  elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

?>