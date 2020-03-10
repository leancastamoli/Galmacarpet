
<?php

if (isset($_GET['modelo'])) {
    $tipoa = $_GET['tipoa'];
    $sub = $_GET['sub'];
    $modelo = $_GET['modelo'];
}
if (isset($_POST['enviar'])) {
    $tipoa = $_GET['tipoa'];
    $sub = $_GET['sub'];
    $modelo = $_GET['modelo'];
    $variacion = $_POST['variacion'];
    header("location:index.php?p=datos&tipoa=".$tipoa."&sub=".$sub."&modelo=".$modelo."&variacion=".$variacion);
}

?>

<main>
    <h1>Variacion</h1>

    <form action="index.php?p=var&tipoa=<?php echo $tipoa.'&sub='.$sub.'&modelo='.$modelo ?>" id="formvar" method="POST">
        <select name="variacion" id="variacion">
            <option value="1g">VARIACION 1G</option>
            <option value="2g">VARIACION 2G</option>
            <option value="3g">VARIACION 3G</option>
        </select><br>
        <input type="submit" name="enviar" value="ENVIAR">
    </form>

</main>