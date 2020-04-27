
<?php
    if (isset($_GET['borrar'])) {
        $id = $_GET['borrar'];
        $producto = new Producto();
        $producto->get($id);
        $datos = $producto->get_rows();
        foreach ($datos as $fila) {
            $nombre = $fila['imagen'];
            $destino = "./assets/img/";
            if (is_file($destino.$nombre)) {
                unlink($destino.$nombre);
            }
        }
        $producto->delete($id);
    }
    if (isset($_GET['tipo'])) {
        if ($_GET['tipo']=='pasillo') {
            # code...
        }
    }
?>

<main>
    <div class="Ccontenedor">

        <div class="Ctitulo">
             <a href="index.php?p=catalogo"><h1>Catálogo</h1></a> 
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
                        <div class="f1">
                            <li> <a href="index.php?p=catalogo&tipo=pasillos">PASILLOS</a> 
                                <ul>
                                    <li> <a href="index.php?p=catalogo&tipo=pasillos&subtipo=1g">HAUSSMANN 1G</a></li>
                                    <li> <a href="index.php?p=catalogo&tipo=pasillos&subtipo=2g"> HAUSSMANN 2G</a></li>
                                    <li> <a href="index.php?p=catalogo&tipo=pasillos&subtipo=3g"> HAUSSMANN 3G</a></li>
                                    <li> <a href="index.php?p=catalogo&tipo=pasillos&subtipo=4g"> HAUSSMANN 4G</a></li>
                                    <li> <a href="index.php?p=catalogo&tipo=pasillos&subtipo=5g"> HAUSSMANN 5G</a></li>
                                </ul>
                            </li>
                        </div>
                        <div class="f1">
                            <li><a href="index.php?p=catalogo&tipo=custom_rug">CUSTOM RUG</a></li>
                        </div>
                        <div class="f2">
                            <li><a href="index.php?p=catalogo&tipo=moqueta">MOQUETA</a>
                                <ul>
                                    <li><a href="index.php?p=catalogo&tipo=moqueta&subtipo=contract">CONTRACT</a>
                                        <ul>
                                            <li><a href="index.php?p=catalogo&tipo=moqueta&subtipo=contract&modelo=custom_carpet">CUSTOM CARPETS</a>
                                                <ul>
                                                    <li><a href="index.php?p=catalogo&tipo=moqueta&subtipo=contract&modelo=custom_carpet&variacion=1g">VARIATION 1G</a></li>
                                                    <li><a href="index.php?p=catalogo&tipo=moqueta&subtipo=contract&modelo=custom_carpet&variacion=2g">VARIATION 2G</a></li>
                                                    <li><a href="index.php?p=catalogo&tipo=moqueta&subtipo=contract&modelo=custom_carpet&variacion=3g">VARIATION 3G</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.php?p=catalogo&tipo=moqueta&subtipo=contract&modelo=cobalt">COBALT</a></li>
                                            <li><a href="index.php?p=catalogo&tipo=moqueta&subtipo=contract&modelo=zem">ZEM</a></li>
                                        </ul>
                                    </li>
                                    <li> <a href="index.php?p=catalogo&tipo=moqueta&subtipo=residencial">RESIDENCIAL</a>
                                        <ul>
                                            <li><a href="index.php?p=catalogo&tipo=moqueta&subtipo=residencial&modelo=renaissance">RENAISSANCE</a></li>
                                            <li><a href="index.php?p=catalogo&tipo=moqueta&subtipo=residencial&modelo=infinity">INFINITY</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </div>
                
            </div>
            <div class="Cimagenes">
                <?php
                    $producto = new Producto();
                    $producto->get();
                    $productos = $producto->get_rows();
                    foreach ($productos as $fila) {
                        if (isset($_GET['tipo'])) {
                            $tipo = $_GET['tipo'];
                            if ($tipo == 'pasillos') {
                                if ($fila['tipo'] == $tipo) {
                                    if (isset($_GET['subtipo'])) {
                                        if ($fila['subtipo'] == $_GET['subtipo']) {
                                            ?>
                                                <div class="imagen">
                                                    <a href="index.php?p=mostrar&id=<?php echo $fila['id']?>"><img src="./assets/img/<?php echo $fila['imagen']?>" alt="imagen"></a><br>
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
                                    }else{
                                            ?>
                                                <div class="imagen">
                                                    <a href="index.php?p=mostrar&id=<?php echo $fila['id']?>"><img src="./assets/img/<?php echo $fila['imagen']?>" alt="imagen"></a><br>
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
                                }else{
                                    /* No hay productos pasilleros */
                                }
                                
                            }else if($tipo == 'custom_rug'){
                                if ($fila['tipo'] == $tipo) {
                                            ?>
                                                <div class="imagen">
                                                    <a href="index.php?p=mostrar&id=<?php echo $fila['id']?>"><img src="./assets/img/<?php echo $fila['imagen']?>" alt="imagen"></a><br>
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
                                }else{
                                    /* No hay productos pasilleros */
                                }
                            }else if($tipo == 'moqueta'){
                                if ($fila['tipo'] == $tipo) {
                                    if (isset($_GET['subtipo'])) {
                                        if ($fila['subtipo'] == $_GET['subtipo']) {
                                            if (isset($_GET['modelo'])) {
                                                if ($fila['subtipo'] == $_GET['subtipo'] && $fila['modelo'] == $_GET['modelo']) {
                                                    if (isset($_GET['variacion'])) {
                                                        if ($fila['subtipo'] == $_GET['subtipo'] && $fila['modelo'] == $_GET['modelo'] && $fila['variacion'] == $_GET['variacion']) {
                                                            ?>
                                                                <div class="imagen">
                                                                    <a href="index.php?p=mostrar&id=<?php echo $fila['id']?>"><img src="./assets/img/<?php echo $fila['imagen']?>" alt="imagen"></a><br>
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
                                                    }else{
                                                        ?>
                                                            <div class="imagen">
                                                                <a href="index.php?p=mostrar&id=<?php echo $fila['id']?>"><img src="./assets/img/<?php echo $fila['imagen']?>" alt="imagen"></a><br>
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
                                                }
                                            }else{
                                                ?>
                                                    <div class="imagen">
                                                        <a href="index.php?p=mostrar&id=<?php echo $fila['id']?>"><img src="./assets/img/<?php echo $fila['imagen']?>" alt="imagen"></a><br>
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
                                        }
                                    }else{
                                            ?>
                                                <div class="imagen">
                                                    <a href="index.php?p=mostrar&id=<?php echo $fila['id']?>"><img src="./assets/img/<?php echo $fila['imagen']?>" alt="imagen"></a><br>
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
                                }
                            }
                        }else{
                            ?>
                                <div class="imagen">
                                    <a href="index.php?p=mostrar&id=<?php echo $fila['id']?>"><img src="./assets/img/<?php echo $fila['imagen']?>" alt="imagen"></a><br>
                                    <p class="nombre"><?php echo $fila['titulo']?></p><br>
                                    <div class="controles">
                            <?php
                                    if (isset($_SESSION['tipo'])) {
                                        if ($_SESSION['tipo']=="admin") {
                            ?>
                                        <a href="index.php?p=catalogo&borrar=<?php echo $fila['id']?>"><i class="far fa-trash-alt"></i></a>
                                        <a href="index.php?p=datos&edit=<?php echo $fila['id']?>"><i class="fas fa-edit"></i></a>
                            <?php
                                        }else if ($_SESSION['tipo']=="trabajador") {
                            ?>
                                            <a href="index.php?p=datos&edit=<?php echo $fila['id']?>"><i class="fas fa-edit"></i></a>
                            <?php
                                        }
                                    }
                            ?>
                                    </div>
                                    
                                </div>
                            <?php
                        }
                    }
                ?>
            
            </div>
        
        </div>
        
    </div>
    
</main>