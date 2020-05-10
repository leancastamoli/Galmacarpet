
<?php
            /* Recibir datos agregados antes */
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
            /* Agregar datos y crear */
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
  
    
    /* Editar el objeto */
    
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
        $producto = new Producto();
        $producto->get($id);
        $productos = $producto->get_rows();
        foreach ($productos as $fila) {
            $imagen = $fila['imagen'];
?>
    <main>
        <div class="Icontenedor2">
            <div class="Inh1">
                <h1>Editar: <?php echo $fila['titulo'] ?></h1>
            </div>
            <div class="Dform">
                <form action="index.php?p=datos&tipoa=<?php echo $fila['tipo'].'&sub='.$fila['subtipo'].'&modelo='.$fila['modelo']. '&variacion='.$fila['variacion'].'&imagen='.$fila['imagen'].'&id='.$id ?>" id="datos" method="POST" enctype="multipart/form-data">
                    <div>
                        <label>Imagen: </label><br>
                        <input type="file" name="fichero"><br>
                    </div>
                    <div>
                        <label>Titulo: </label><br>
                        <input type="text" name="titulo" value="<?php echo $fila['titulo']?>"><br>
                    </div>
                    <div>
                        <label>Dibujo: </label><br>
                        <input type="text" name="dibujo" value="<?php echo $fila['dibujo']?>"><br>
                    </div>
                    <div>
                        <label>Colores: </label><br>
                        <input type="text" name="colores" value="<?php echo $fila['colores']?>"><br>
                    </div>
                    <div>
                        <label>Tipo de lana: </label><br>
                        <input type="text" name="lana" value="<?php echo $fila['tipo_lana']?>"><br>
                    </div>
                    <div>
                        <input class="enviarD" type="submit" name="editar" value="EDITAR">
                    </div>
                </form>
            </div>
        </div>
       
    </main>
<?php
        }
    }else{
?>
        <!-- Pagina creacion -->
<main>
    <div class="Icontenedor2">
        <div class="Inh1">
            <h1>Agregar Datos</h1>
        </div>
        <div class="Dform">
            <form action="index.php?p=datos&tipoa=<?php echo $tipoa.'&sub='.$sub.'&modelo='.$modelo. '&variacion='.$variacion ?>" id="datos" method="POST" enctype="multipart/form-data">
                <div>
                    <label>Imagen: </label><br>
                    <input type="file" name="fichero"><br>
                </div>
                <div>
                    <label>Titulo: </label><br>
                    <input type="text" name="titulo" placeholder="Titulo"><br>
                </div>
                <div>
                    <label>Dibujo: </label><br>
                    <input type="text" name="dibujo" placeholder="Dibujo"><br>
                </div>
                <div>
                    <label>Colores: </label><br>
                    <input type="text" name="colores" placeholder="Colores"><br>
                </div>
                <div>
                    <label>Tipo de lana: </label><br>
                    <input type="text" name="lana" placeholder="Tipo de lana"><br>
                </div>
                <div class="enviarD">
                    <input type="submit" name="enviar" value="AGREGAR">
                </div>
            </form>
        </div>
    </div>
        
    
</main>

<?php
    }
?>