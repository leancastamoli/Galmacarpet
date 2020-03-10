
<?php
    if (isset($_GET['tipoa'])) {
        $tipoa = $_GET['tipoa'];
    }
    if (isset($_POST['enviarP'])) {
        $tipoa = $_GET['tipoa'];
        $sub = $_POST['sub'];
        header("location:index.php?p=datos&tipoa=".$tipoa."&sub=".$sub);
    }
    if (isset($_POST['enviarM'])) {
        $tipoa = $_GET['tipoa'];
        $sub = $_POST['sub'];
        header("location:index.php?p=model&tipoa=".$tipoa."&sub=".$sub);
    }
?>

<main>
    <div>
        <h1>Subtipo</h1> 
    </div>

    <?php
        if ($_GET['tipoa']=='pasillos') {
    ?>
            <form action="index.php?p=sub&tipoa=<?php echo $tipoa?>" id="formsub" method="POST">
                <select name="sub" id="sub">
                    <option value="1g">HAUSSMANN 1G</option>
                    <option value="2g">HAUSSMANN 2G</option>
                    <option value="3g">HAUSSMANN 3G</option>
                    <option value="4g">HAUSSMANN 4G</option>
                    <option value="5g">HAUSSMANN 5G</option>
                </select><br>
                <input type="submit" name="enviarP" value="ENVIAR">
            </form>
    <?php
        }else{
    ?>
            <form action="index.php?p=sub&tipoa=<?php echo $tipoa?>" id="formsub" method="POST">
                <select name="sub" id="sub">
                    <option value="contract">CONTRACT</option>
                    <option value="residencial">RESIDENCIAL</option>
                </select><br>
                <input type="submit" name="enviarM" value="ENVIAR">
            </form>
    <?php
        }
    ?>
      
</main>