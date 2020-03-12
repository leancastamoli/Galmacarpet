
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
    <div class="Icontenedor1">
        <div class="Inh1">
            <h1>Variacion</h1>
        </div>
        
        <div class="Iform">
            <form action="index.php?p=var&tipoa=<?php echo $tipoa.'&sub='.$sub.'&modelo='.$modelo ?>" id="formvar" method="POST">
                <select name="variacion" id="variacion">
                    <option value="1g">VARIACION 1G</option>
                    <option value="2g">VARIACION 2G</option>
                    <option value="3g">VARIACION 3G</option>
                </select><br>
                <button class="enviar"  name="enviar" type="submit">SIGUIENTE <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>
        
    </div>
    

</main>