
<h1>Conversor de Moneda</h1>
<p>Indica la moneda original, el valor, seguido de la moneda a la que quieres convertir</p>
    
<form action="" method="POST">

    <label for="Convertir1">Convertir de: </label><br/>

    <select name="moneda1" id="moneda1">
        <option value="euro">Euro</option>
        <option value="ca$">Dolar Canadiense</option>
        <option value="yen">Yen Japones</option>
        <option value="us$">Dolar Estadounidense</option>
        <option value="mxp">Peso Mexicano</option>
    </select><br/><br/>

    <label for="valor">Valor</label><br/>
    <input type="text" name="valor" value="<?php echo isset($_POST['valor']) ? $_POST['valor'] : '' ?>" /><br/><br/>
    <nobr></nobr>

    <?php
        if(isset($convertir) && empty($valor)) {
            echo "<small style='color:red'>Por favor, ingrese un valor</small></br></br>";
            $resultado = false;
        } elseif(isset($convertir) && !preg_match('/^(?![0.]+$)\d+(\.\d{1,2})?$/', $valor)){
            echo "<small style='color:red'>Por favor, ingrese números válidos (enteros o decimales positivos)</small></br></br>";
            $resultado = false;
        }
    ?>

    <label for="Convertir2">Convertir a: </label><br/>
    <select name="moneda2" id="moneda2">
        <option value="euro">Euro</option>
        <option value="ca$">Dolar Canadiense</option>
        <option value="yen">Yen Japones</option>
        <option value="us$">Dolar Estadounidense</option>
        <option value="mxp">Peso Mexicano</option>
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

