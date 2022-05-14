<?php
$options = [
    'euro' => 'Euro',
    'ca$' => 'Dolar Canadiense',
    'arg' => 'Peso Argentino',
    'us$' => 'Dolar Estadounidense',
    'mxp' => 'Peso Mexicano'
];
?>

<h1>Conversor de Moneda</h1>
<p>Indica la moneda original, el valor, seguido de la moneda a la que quieres convertir</p>
    
<form action="" method="POST">

    <label for="Convertir1">Convertir de: </label><br/>
    <!-- Menu desplegable 1 -->
    <select name="moneda1" id="moneda1">
    <?php foreach ($options as $key => $label) { ?>
        <option value="<?= $key?>"<?= (isset($_POST['moneda1']) && $_POST['moneda1'] == $key) ? 'selected= "selected"' : '' ?>><?= $label ?></option>
    <?php } ?>
    </select><br/><br/>

    <!-- Input de valor -->
    <label for="valor">Valor</label><br/>
    <input type="text" name="valor" value="<?php echo isset($_POST['valor']) ? $_POST['valor'] : '' ?>" /><br/><br/>
    <nobr></nobr>


    <!-- Validacion de datos en input valor -->
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

    <!-- Menu desplegable 2 -->
    <select name="moneda2" id="moneda2">
    <?php foreach ($options as $key => $label) { ?>
        <option value="<?= $key?>"<?= (isset($_POST['moneda2']) && $_POST['moneda2'] == $key) ? 'selected= "selected"' : '' ?>><?= $label ?></option>
    <?php } ?>
    </select><br/><br/>
    <input type="submit" value="Convertir" name="convertir">

    </form>
    
    <!-- Imprime el resultado de la operacion -->
    <?php
    if($resultado != false) {
        echo "<h2>El resultado es: <div style='color:green'>$resultado</div> </h2>"; 
    }
    ?>

    <form action="">
    <p><input type="submit" value="Limpiar Pantalla" name="limpiar"></p>
    </form>

