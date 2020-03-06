<?php

    if (isset($_POST['iniciar'])) {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $inicio = new Inicio();
        $inicio->get();
        $usuarios = $inicio->get_rows();
        foreach ($usuarios as $fila) {
            if ($usuario==$fila['usuario'] && $contraseña==$fila['contraseña']) {
                $_SESSION['tipo']=$fila['tipo'];
                header('location:index.php?p=main');
            }else{
?>
            <script>errorcredencial()</script>
<?php
            }
        }
    }

?>

<main class="iniciar_sesion">
    <div class="iniciar">
        <div class="Ih1">
            <h1>Iniciar Sesion</h1>
        </div>
        <div class="Icontenedor">
            <div class="Iimg">
                <h1><i class="fas fa-user"></i></h1>
            </div>
            <div class="Iformulario">
                <form action="index.php?p=iniciar"  method="POST">
                    <div class="Idato">
                        <label>Usuario:</label>
                    </div>
                    <div class="Idato">
                        <input type="text"  name="usuario" placeholder="Usuario">
                    </div>
                    <div class="Idato">
                        <label>Contraseña:</label>
                    </div>
                    <div class="Idato">
                        <input type="password"  name="contraseña" placeholder="contraseña">
                    </div>
                    <div class="Ienviar">
                        <button type="submit" name="iniciar">Iniciar sesion</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>