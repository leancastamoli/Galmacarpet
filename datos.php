
<?php
    if (isset($_GET['tipoa'])) {
        $tipoa = $_GET['tipoa'];
        $sub = null;
        $modelo = null;
        $variacion = null;
            if (isset($_GET['sub'])) {
                $tipoa = $_GET['tipoa'];
                $sub = $_GET['sub'];
                $modelo = null;
                $variacion = null;
                    if (isset($_GET['modelo'])) {
                        $tipoa = $_GET['tipoa'];
                        $sub = $_GET['sub'];
                        $modelo = $_GET['modelo'];
                        $variacion = null;
                            if (isset($_GET['variacion'])) {
                                $tipoa = $_GET['tipoa'];
                                $sub = $_GET['sub'];
                                $modelo = $_GET['modelo'];
                                $variacion = $_GET['variacion'];
                                
                            }
                    }
            }
    }
    if (isset($_POST['enviar'])) {
            $titulo = $_POST['titulo'];
            $dibujo = $_POST['dibujo'];
            $colores = $_POST['colores'];
            $tipo_lana = $_POST['lana'];
        if ($titulo == "" || $dibujo == "" || $colores == "" || $tipo_lana == "") {
        ?>
            <script>
                errorVacio();
            </script>
        <?php
        }else{
            $destino = "./assets/img/";
            $fichero = $_FILES['fichero']['name'];
            if (is_file($destino.$fichero)) {
        ?>
            <script>
                imagenExistente();
            </script>
        <?php
            }else{
                $tiposValidos = array("image/gif", "image/jpeg", "image/png");
                if (in_array($_FILES["fichero"]["type"], $tiposValidos)) {
        
                    if (is_uploaded_file($_FILES['fichero']['tmp_name'])) 
                        move_uploaded_file($_FILES['fichero']['tmp_name'], $destino.$fichero);
                        $producto = new Producto();
                        $productos = ['id'=>null,
                                    'tipo'=>$tipoa,
                                    'subtipo'=>$sub,
                                    'modelo'=>$modelo,
                                    'variacion'=>$variacion,
                                    'titulo'=>$titulo,
                                    'dibujo'=>$dibujo,
                                    'colores'=>$colores,
                                    'tipo_lana'=>$tipo_lana,
                                    'imagen'=>$fichero];
                        $producto->set($productos);
                ?>
                    <script>
                        productoCreado();
                    </script>
                <?php  
                    header("location:index.php?p=catalogo");

                }
                else{
                ?>
                    <script>
                       tipoIncorrecto();
                    </script>
                <?php  
                    
                }
            }
           
    
        }
        
        
    }
    
    
    
    

?>

<main>
    <form action="index.php?p=datos&tipoa=<?php echo $tipoa.'&sub='.$sub.'&modelo='.$modelo. '&variacion='.$variacion ?>" id="datos" method="POST" enctype="multipart/form-data">
        <label>Imagen: </label>
        <input type="file" name="fichero"><br>
        <label>Titulo: </label><br>
        <input type="text" name="titulo" placeholder="Titulo"><br>
        <label>Dibujo: </label><br>
        <input type="text" name="dibujo" placeholder="Dibujo"><br>
        <label>Colores: </label><br>
        <input type="text" name="colores" placeholder="Colores"><br>
        <label>Tipo de lana: </label><br>
        <input type="text" name="lana" placeholder="Tipo de lana"><br>
        <input type="submit" name="enviar" value="ENVIAR">
    </form>
</main>