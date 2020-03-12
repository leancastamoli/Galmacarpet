
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
    <div class="Icontenedor1">
        <div class="Inh1">
            <h1>Subtipo</h1> 
        </div>

        <?php
            if ($_GET['tipoa']=='pasillos') {
        ?>
            <div class="Iform">
                <form action="index.php?p=sub&tipoa=<?php echo $tipoa?>" id="formsub" method="POST">
                    <select name="sub" id="sub">
                        <option value="1g">HAUSSMANN 1G</option>
                        <option value="2g">HAUSSMANN 2G</option>
                        <option value="3g">HAUSSMANN 3G</option>
                        <option value="4g">HAUSSMANN 4G</option>
                        <option value="5g">HAUSSMANN 5G</option>
                    </select><br>
                    <button class="enviar"  name="enviarP" type="submit">SIGUIENTE <i class="fas fa-arrow-right"></i></button>
                </form>
            </div>
        <?php
            }else{
        ?>      <div class="Iform">
                    <form action="index.php?p=sub&tipoa=<?php echo $tipoa?>" id="formsub" method="POST">
                        <select name="sub" id="sub">
                            <option value="contract">CONTRACT</option>
                            <option value="residencial">RESIDENCIAL</option>
                        </select><br>
                        <button class="enviar"  name="enviarM" type="submit">SIGUIENTE <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
        <?php
            }
        ?>
        
    </div>
    
</main>