
<?php
    if (isset($_GET['sub'])) {
        $tipoa = $_GET['tipoa'];
        $sub = $_GET['sub'];
    }
    if (isset($_POST['enviarM'])) {
        $tipoa = $_GET['tipoa'];
        $sub = $_GET['sub'];
        $modelo = $_POST['modelo'];
        if ($modelo=='custom_carpet') {
            header("location:index.php?p=var&tipoa=".$tipoa."&sub=".$sub."&modelo=".$modelo);
        }else{
            header("location:index.php?p=datos&tipoa=".$tipoa."&sub=".$sub."&modelo=".$modelo);
        }
    }
    if (isset($_POST['enviarR'])) {
        $tipoa = $_GET['tipoa'];
        $sub = $_GET['sub'];
        $modelo = $_POST['modelo'];
        header("location:index.php?p=datos&tipoa=".$tipoa."&sub=".$sub."&modelo=".$modelo);
    }
?>

<main>
    <div>
        <h1>Modelo</h1> 
    </div>

    <?php
        if ($_GET['sub'] == 'contract') {
    ?>
            <form action="index.php?p=model&tipoa=<?php echo $tipoa.'&sub='.$sub?>" id="formmodel" method="POST">
                <select name="modelo" id="modelo">
                    <option value="custom_carpet">CUSTOM CARPETS</option>
                    <option value="cobalt">COBALT</option>
                    <option value="zem">ZEM</option>
                </select><br>
                <input type="submit" name="enviarM" value="ENVIAR">
            </form>
    <?php
        }else{
    ?>
            <form action="index.php?p=model&tipoa=<?php echo $tipoa.'&sub='.$sub?>" id="formmodel" method="POST">
                <select name="modelo" id="modelo">
                    <option value="renaissance">RENAISSANCE</option>
                    <option value="infinity">INFINITY</option>
                </select><br>
                <input type="submit" name="enviarR" value="ENVIAR">
            </form>
    <?php
        }
    ?>
      
</main>