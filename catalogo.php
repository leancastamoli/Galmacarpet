<main>
    <div class="Ccontenedor">

        <div class="Ctitulo">
            <h1>Catalogo</h1>
        </div>
        <div>
            <?php
            if (isset($_SESSION['tipo'])) {
                if ($_SESSION['tipo']=='admin') { 
            ?>
                    <a href="index.php?p=insert">Insertar</a>
            <?php
                }
            }
               
            ?>
             
        </div>
        
    </div>
    
</main>