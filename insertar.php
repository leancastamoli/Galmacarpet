
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
    <div class="Icontenedor1">
        <div class="Inh1">
            <h1>Insertar producto</h1>
        </div>
        <div class="Ih2">
            <h2>Agregar tipo: </h2>
        </div>
        <div class="Iform">
            <form action="index.php?p=insert" id="formtipo" method="POST">
                <select name="tipoa" id="tipoa">
                    <option value="pasillos">PASILLOS</option>
                    <option value="custom_rug">CUSTOM RUG</option>
                    <option value="moqueta">MOQUETA</option>
                </select><br>
                <button class="enviar"  name="enviar" type="submit">SIGUIENTE <i class="fas fa-arrow-right"></i></button>
            </form>
                
        </div>
    </div>
   
</main>