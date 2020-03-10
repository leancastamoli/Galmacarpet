
<?php
    if (isset($_POST['enviar'])) {
        $tipoa =$_POST['tipoa'];
        if ($tipoa=='pasillos') {
            header("location:index.php?p=sub&tipoa=".$tipoa);
        }else if($tipoa=='custom_rug'){
            header("location:index.php?p=datos&tipoa=".$tipoa);
        }else{
            header("location:index.php?p=sub&tipoa=".$tipoa);
        }
        
    }
?>

<main>
    <div>
        <h1>Insertar producto</h1>

        <div>
            <h2>Agregar tipo: </h2>
        </div>
        <div>
            <form action="index.php?p=insert" id="formtipo" method="POST">
                <select name="tipoa" id="tipoa">
                    <option value="pasillos">PASILLOS</option>
                    <option value="custom_rug">CUSTOM RUG</option>
                    <option value="moqueta">MOQUETA</option>
                </select><br>
                <input type="submit" name="enviar" value="ENVIAR">
            </form>
                
        </div>
    </div>
   
</main>