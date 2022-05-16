<style>
h1{
    text-align: center;
}
p{
    text-align: center;
}

.form-container{
    width:100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.form-section{
    margin-top: 20px;
    width: 50%;
    text-align: center;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 28px 11px rgba(99,99,99,0.75);
-webkit-box-shadow: 0px 0px 28px 11px rgba(99,99,99,0.75);
-moz-box-shadow: 0px 0px 28px 11px rgba(99,99,99,0.75);
}

.form-section select{
    padding: 7px;
    border-radius: 5px;
}

input[type="text" i]{
    padding: 7px;
    border-radius: 5px;
}
.btn {
  display: inline-block;
  background: blue;
  color: #fff;
  padding: 10px 20px;
  cursor: pointer;
  border: 0;
  border-radius: 5px;
}

.btn:hover {
  opacity: 0.9;
}
</style>
<?php
$options = [
    'seg' => 'Segundo',
    'min' => 'Minuto',
    'h' => 'Hora',
    'd' => 'Dia',
    'sm' => 'Semana',
    'm' => 'Mes',        
];
?>

<h1>Conversor de Tiempo</h1>
<p>Indica la medida de tiempo original, el valor de la medida de tiempo, seguido del tipo de medida de tiempo al que quieres convertir</p>

<div class="form-container">

<form class="form-section" action="" method="POST">

    <label for="Convertir1">Convertir de: </label><br/>
    <!-- Menu desplegable dinamico -->
    <select name="tiempo1" id="tiempo1">
        <?php foreach ($options as $key => $label) { ?>
            <option value="<?= $key?>"<?=(isset($_POST['tiempo1']) && $_POST['tiempo1'] == $key) ? 'selected= "selected"' : '' ?>><?= $label ?></option>
        <?php } ?>
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
    <!-- Menu desplegable dinamico -->
    <select name="tiempo2" id="tiempo2">
        <?php foreach ($options as $key => $label) { ?>
            <option value="<?= $key?>"<?=(isset($_POST['tiempo2']) && $_POST['tiempo2'] == $key) ? 'selected= "selected"' : '' ?>><?= $label ?></option>
        <?php } ?>
    </select><br/><br/>

    <input class="btn" type="submit" value="Convertir" name="convertir">

    </form>
    </div>

    <?php
    if($resultado != false) {
        echo "<h2>El resultado es: <div style='color:green'>$resultado</div> </h2>"; //variable indefinida resultado
    }
    ?>

    <form action="">
    <p><input class="btn" type="submit" value="Limpiar Pantalla" name="limpiar"></p>
    </form>