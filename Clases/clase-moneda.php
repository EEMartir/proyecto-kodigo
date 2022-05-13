<?php
//Referencia https://www.xe.com/es/currencyconverter/

interface Conversor { 
    public function originalCurrency($original, $valor);
}

// ==================================================================================================================
class toEuro implements Conversor {
    
    //USD to Euro ----- [amount] / $1.08 (valor actual de 1 euro a 1 dolar)
    //CAD to Euro ----- [amount] / C$ 1.36
    //Yen to Euro ----- [amount] /  136,92381 * 100 
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
            } elseif ($original == "yen") { 
                $resultado = $this->valor / (136.92381 * 100) *100;
                return $resultado;
            } elseif ($original == "mxp") { 
                $resultado = $this->valor / 21.3756;
                return $resultado;
            } elseif($original == "euro"){
                return "No se puede convertir a la misma moneda";
            } else {
                echo "Este valor no existe";
            }
        } elseif(empty($this->valor)) {
            $resultado = false;
        }


    }
}

// ==================================================================================================================
class toYen implements Conversor {
    
    //USD to Yen ----- [amount] / $0,0078181959 (valor actual de un yen a un US dolar)
    //Euro to Yen ----- [amount] / EUR 0.0072559324 
    //CAD to Yen ----- [amount] / 0.0098372582
    //MXN to Yen ----- [amount] / 0.15477795

    public function originalCurrency($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "us$" ){
            $resultado = $valor / 0.0078181959 ;
            return $resultado;
            //devolver resultado con la puntuacion de los yenes. Ejemplo: 10.163,439.
        } elseif ($original == "ca$") { 
            $resultado = $valor / 0.0098372582;
            return $resultado;
        } elseif ($original == "euro") { 
            $resultado = $valor / 0.0072559324 ;
            return $resultado;
        } elseif ($original == "mxp") { 
            $resultado = $valor / 0.15477795;
            return $resultado;
        } elseif ($original == "yen"){
            return "No se puede convertir a la misma moneda";
        } else {
            echo "Este valor no existe";
        }
        }  elseif(empty($this->valor)) {
            $resultado = false;
        }

    }
}
// ==================================================================================================================

class toUSD implements Conversor {

    //CAD to USD ----- [amount] / CAD 1.2581322
    //Euro to USD ----- [amount] / EUR 0.92751168
    //Yen to USD ----- [amount] / YEN 127.86545 * 100 
    //MXN Peso to USD ----- [amount] / MXN 19.77943

    public function originalCurrency($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "yen" ){
            $resultado = $valor / (127.86545 * 100) * 100;
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
            return "No se puede convertir a la misma moneda";
        } else {
            echo "Este valor no existe";
        }
        }  elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

// ==================================================================================================================
class toCAD implements Conversor {

    //USD to CAD ----- [amount] / USD 0,79469886
    //Euro to CAD ----- [amount] / EUR 0.73744181
    //Yen to CAD ----- [amount] / YEN 101.69776 * 100 
    //MXN to CAD ----- [amount] / MXN 15.718696
    
    public function originalCurrency($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "yen" ){
            $resultado = $valor / (101.69776 * 100 ) *100;
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
            return "No se puede convertir a la misma moneda";
        } else {
            echo "Este valor no existe";
        }
        }  elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}
// ==================================================================================================================

class toMXN implements Conversor {

    //USD to MXN ----- [amount] / USD 0.050559712
    //Euro to MXN ----- [amount] / EUR 0.046923072
    //Yen to MXN ----- [amount] / YEN (6.47743  * 100) * 100 
    //CAD to MXN ----- [amount] / CAD 0.06361126
    
    public function originalCurrency($original, $valor){
        $this->original = $original;
        $this->valor = $valor;

        if(!empty($this->valor)){
        if($original == "yen" ){
            $resultado = $valor / (6.47743  * 100) * 100;
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
            return "No se puede convertir a la misma moneda";
        } else {
            echo "Este valor no existe";
        }
        }  elseif(empty($this->valor)) {
            $resultado = false;
        }
    }
}

?>