
<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $producto = new Producto();
        $producto->get($id);
        $productos = $producto->get_rows();
        foreach ($productos as $fila) {
    ?>
        <main>
            <div class="Mpagina">

            <div class="Mtitulo">
                <div class="atras">
                    <a href="index.php?p=catalogo"><i class="fas fa-arrow-circle-left"></i></a>
                </div>
                <div class="Mh1">
                    <h1><?php echo $fila['titulo'] ?></h1>
                </div>
            </div>
            <div class="Mcontenedor">
                <div class="Mimagen">
                    <a class="fancybox" href="./assets/img/<?php echo $fila['imagen']?>"><img src="./assets/img/<?php echo $fila['imagen']?>" alt="<?php echo $fila['imagen']?>" /></a>
                </div>
                <div class="Mtexto">
                    <label class="enun">Tipo:</label><br>
                    <label class="resp"><?php echo $fila['tipo'] ?></label><br>
                <?php
                    if ($fila['subtipo'] != "") {
                        ?>
                            <label class="enun">Subtipo:</label><br>
                            <label class="resp"><?php echo $fila['subtipo'] ?></label><br>
                        <?php
                    }
                    if ($fila['modelo'] != "") {
                        ?>
                            <label class="enun">Modelo:</label><br>
                            <label class="resp"><?php echo $fila['modelo'] ?></label><br>
                        <?php
                    }
                    if ($fila['variacion'] != "") {
                        ?>
                            <label class="enun">Variacion:</label><br>
                            <label class="resp"><?php echo $fila['variacion'] ?></label><br>
                        <?php
                    }
                ?>
                    
                    <label class="enun">Dibujo:</label><br>
                    <label class="resp"><?php echo $fila['dibujo'] ?></label><br>
                    <label class="enun">Colores: </label><br>
                    <label class="resp"><?php echo $fila['colores'] ?></label><br>
                    <label class="enun">Tipo de Lana: </label><br>
                    <label class="resp"><?php echo $fila['tipo_lana'] ?></label><br>
                    <a href="imprimir.php?id=<?php echo $fila['id'] ?>">Imprimir</a>
                </div>
            </div>
                   
    <?php
        }
        $recomen = new Producto();
        $recomen->get();
        $recomendados = $recomen->get_rows();
        $cont = 0;
    ?>
        <div class="reco">
            <label >Otros:</label>
        </div>
        <div class="Mreco">
            
            <?php
                foreach ($recomendados as $reco) {
                    if ($_GET['id']!=$reco['id'] && $cont != 4) {
                        $cont = $cont + 1; 
            ?>
                    <div class="imagenReco">
                        <a href="index.php?p=mostrar&id=<?php echo $reco['id']?>"><img src="./assets/img/<?php echo $reco['imagen']?>" alt="imagen"></a><br>
                    </div>
            <?php
                    }
                }
            ?>
        </div>
    <?php
        }
    ?>
    </div>
</main>

