<h1>Conversor de Volumen</h1>
<p>Indica el volumen original, el valor del volumen, seguido del tipo de volumen al que quieres convertir</p>
    
<form action="" method="POST">

    <label for="Convertir1">Convertir de: </label><br/>
    <select name="volumen1" id="volumen1">
        <option value="">Milimetro Cubico</option>
        <option value="">Centimetro Cubico</option>
        <option value="">Decimetro Cubico</option>
        <option value="">Metro Cubico</option>
        <option value="">Decametro Cubico</option>
        <option value="">Hectometro Cubico</option>
    </select><br/><br/>

    <label for="valor">Valor</label><br/>
    <input type="text" name="valor"><br/><br/>
    <nobr></nobr>

    <?php
        if(isset($convertir) && empty($valor)) {
            echo "<small style='color:red'>Instroduce un valor</small></br></br>";
        } elseif(isset($convertir) && preg_match('/^(?![0.]+$)\d+(\.\d{1,2})?$/', !empty($valor))){
            echo "<small style='color:red'>Introduce numeros validos</small></br></br>";
        }
    ?>

    <label for="Convertir2">Convertir a: </label><br/>
    <select name="volumen2" id="volumen2">
        <option value="">Milimetro Cubico</option>
        <option value="">Centimetro Cubico</option>
        <option value="">Decimetro Cubico</option>
        <option value="">Metro Cubico</option>
        <option value="">Decametro Cubico</option>
        <option value="">Hectometro Cubico</option>
    </select><br/><br/>

    <input type="submit" value="Convertir" name="convertir">

    </form>

    <?php
    if($resultado != false) {
        echo "<h2>El resultado es: <div style='color:green'>$resultado</div> </h2>"; //variable indefinida resultado
    }
    ?>

    <form action="">
    <input type="submit" value="Limpiar" name="limpiar">
    </form>