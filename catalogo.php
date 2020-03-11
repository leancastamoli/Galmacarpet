
<?php
    if (isset($_GET['borrar'])) {
        $id = $_GET['borrar'];
        $producto = new Producto();
        $producto->delete($id);
    }
?>

<main>
    <div class="Ccontenedor">

        <div class="Ctitulo">
            <h1>Catalogo</h1>
        </div>
        <div class="Cdatos">
            <div class="filtro">
                <?php
                if (isset($_SESSION['tipo'])) {
                    if ($_SESSION['tipo']=='admin') { 
                ?>
                        <a href="index.php?p=insert"><i class="far fa-plus-square"></i></a>
                <?php
                    }
                }
                ?>
                <div class="rutas">
                    <ul>
                        <li>PASILLOS</li>
                        <ul>
                            <li>HAUSSMANN 1G</li>
                            <li>HAUSSMANN 2G</li>
                            <li>HAUSSMANN 3G</li>
                            <li>HAUSSMANN 4G</li>
                            <li>HAUSSMANN 5G</li>
                        </ul>
                        <li>CUSTOM RUG</li>
                        <li>MOQUETA</li>
                    </ul>
                </div>
                
            </div>
            <div class="Cimagenes">
                <?php
                    $producto = new Producto();
                    $producto->get();
                    $productos = $producto->get_rows();
                    foreach ($productos as $fila) {
                    ?>
                        <div class="imagen">
                            <a href="index.php?p=datos&id=<?php echo $fila['id']?>"><img src="./assets/img/<?php echo $fila['imagen']?>" alt="imagen"></a><br>
                            <div class="controles">
                    <?php
                            if (isset($_SESSION['tipo'])) {
                                if (isset($_SESSION['tipo'])) {
                    ?>
                                <a href="index.php?p=catalogo&borrar=<?php echo $fila['id']?>"><i class="far fa-trash-alt"></i></a>
                                <a href="index.php?p=datos&edit=<?php echo $fila['id']?>"><i class="fas fa-edit"></i></a>
                    <?php
                                }
                            }
                    ?>
                            </div>
                            
                        </div>
                    <?php
                    }
                ?>
            
            </div>
        
        </div>
        
    </div>
    
</main>