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

</style>

<h1>Conversor de Datos</h1>
<p>Indica el dato original, el valor del dato, seguido del tipo de dato al que quieres convertir</p>

<div class="form-container">
<form class="form-section" action="" method="POST">

    <label for="Convertir1">Convertir de: </label><br/>
    <select name="datos1" id="datos1">
        <option value="">Byte</option>
        <option value="">Kilobyte</option>
        <option value="">Megabyte</option>
        <option value="">Gigabyte</option>
        <option value="">Terabyte</option>
        <option value="">Petabyte</option>
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
    <select name="datos2" id="datos2">
    <option value="">Byte</option>
        <option value="">Kilobyte</option>
        <option value="">Megabyte</option>
        <option value="">Gigabyte</option>
        <option value="">Terabyte</option>
        <option value="">Petabyte</option>
    </select><br/><br/>

    <input type="submit" value="Convertir" name="convertir">

    </form>
    </div>

    <?php
    if($resultado != false) {
        echo "<h2>El resultado es: <div style='color:green'>$resultado</div> </h2>"; //variable indefinida resultado
    }
    ?>

    <form action="">
    <input type="submit" value="Limpiar" name="limpiar">
    </form>