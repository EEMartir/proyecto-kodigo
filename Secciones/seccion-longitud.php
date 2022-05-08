<h1>Conversor de Longitud</h1>
<p>Indica la longitud original, el valor de la longitud, seguido del tipo de longitud a la que quieres convertir</p>

<form action="" method="POST">

    <label for="Convertir1">Convertir de: </label><br/>
    <select name="longitud1" id="longitud1">
        <option value="km">Kilometro</option>
        <option value="hm">Hectometro</option>
        <option value="m">Metro</option>
        <option value="dm">Decimetro</option>
        <option value="cm">Centimetro</option>
        <option value="mm">Milimetro</option>
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
    <select name="longitud2" id="longitud2">
    <option value="km">Kilometro</option>
        <option value="hm">Hectometro</option>
        <option value="m">Metro</option>
        <option value="dm">Decimetro</option>
        <option value="cm">Centimetro</option>
        <option value="mm">Milimetro</option>
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