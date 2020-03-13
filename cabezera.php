
<?php
    session_start();
    require('clases/db_abstract_model.php');
    require('clases/inicio_model.php');
    require('clases/catalogo_model.php');
    if (isset($_GET['cerrar'])) {
        unset( $_SESSION['tipo']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <script src="./assets/script/jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/48e67b19ab.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./assets/scripts/script.js"></script>
    <title>Galmacarpet</title>
</head>
<body class="animated fadeIn">
    <div class="barraH">
        <label class="telefono" ><i class="fas fa-phone"></i>+34 613 243 920</label>
        <label class="redes"> <a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram"></i></a> <a href="https://es-es.facebook.com/"> <i class="fab fa-facebook-square"></i></a> <a href="https://www.google.com/intl/es/gmail/about/#"><i class="far fa-envelope"></i></a> </label>
    <?php
        if (isset($_SESSION['tipo'])) {
    ?>
            <label class="iniciar"><a href="index.php?p=main&cerrar">Cerrar sesion</a></label>
    <?php
        }else{
    ?>
            <label class="iniciar"><a href="index.php?p=iniciar">Iniciar Sesion</a></label>
    <?php
        }
    ?>
    </div>
    <header>
		<div class="menu">
            <div class="titulo">   
                <a href="index.php?p=main"><h1>Galmacarpet</h1></a>     
            </div>
                <div class="menuD"> 
                    <ul>
                        <li><a href="index.php?p=somos">¿Quienes somos?</a></li>
                        <li><a href="index.php?p=instal">Instalaciones</a></li>
                        <li><a href="index.php?p=catalogo">Catalogo</a></li>
                        <li><a href="index.php?p=contacta">Contacta con nosotros</a></li>
                    </ul>
                </div>
            
        </div>

        <div class="Timg">
            <h1>Galmacarpet</h1>
            <div class="Pimg">
            <p>Conoce nuestra variedad de estilos de moquetas</p>
        </div>
        </div>
        <span class="ir-arriba fas fa-arrow-up"></span>
        
    </header>