<h1>Conversor de Tiempo</h1>
<p>Indica la medida de tiempo original, el valor de la medida de tiempo, seguido del tipo de medida de tiempo al que quieres convertir</p>

<form action="" method="POST">

    <label for="Convertir1">Convertir de: </label><br/>
    <select name="tiempo1" id="tiempo1">
        <option value="seg">Segundo(s)</option>
        <option value="min">Minuto(s)</option>
        <option value="h">Hora(s)</option>
        <option value="d">Dia(s)</option>
        <option value="sm">Semana(s)</option>
        <option value="m">Mes(es)</option>
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
    <select name="tiempo2" id="tiempo2">
        <option value="seg">Segundo(s)</option>
        <option value="min">Minuto(s)</option>
        <option value="h">Hora(s)</option>
        <option value="d">Dia(s)</option>
        <option value="sm">Semana(s)</option>
        <option value="m">Mes(es)</option>
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