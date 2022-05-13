<h1>Conversor de Masa</h1>
<p>Indica la masa original, el valor de la masa, seguido del tipo de masa a la que quieres convertir</p>
    
<form action="" method="POST">

    <label for="Convertir1">Convertir de: </label><br/>
    <select name="masa1" id="masa1">
        <option value="mg">Miligramo</option>
        <option value="g">Gramo</option>
        <option value="kg">Kilogramo</option>
        <option value="t">Tonelada</option>
        <option value="lb">Libra</option>
        <option value="oz">Onza</option>
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
    <select name="masa2" id="masa2">
    <option value="mg">Miligramo</option>
        <option value="g">Gramo</option>
        <option value="kg">Kilogramo</option>
        <option value="t">Tonelada</option>
        <option value="lb">Libra</option>
        <option value="oz">Onza</option>
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