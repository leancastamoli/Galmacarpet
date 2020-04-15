
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
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animated.css">
    <script src="./assets/scripts/jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/48e67b19ab.js" crossorigin="anonymous"></script>
    <script src="./scripts/script.js"></script>

    <!-- FancyBox -->

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script type="text/javascript" src="./assets/fancybox/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./assets/fancybox/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

    <title>Galmacarpet</title>
</head>
<script>
    $(document).ready(function(){
    
    $('.ir-arriba').click(function(){
        $('body, html').animate({
            scrollTop: '0px'
        }, 300);
    });

    $(window).scroll(function(){
        if( $(this).scrollTop() > 0 ){
            $('.ir-arriba').slideDown(300);
        } else { 
            $('.ir-arriba').slideUp(300);
        }
    });

    });
    $(document).ready(function(){
        $("#borrar").click(function(){
            $("#div1").fadeOut();
        });
        $("#mostrar").click(function(){
            $("#div1").fadeIn("slow");
        });
    });
    
</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
<body class="animated fadeIn">
    <div class="barraH">
        <label class="telefono" ><i class="fas fa-phone"></i>613 243 920</label>
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
        <span class="ir-arriba fas fa-arrow-up"></span>
        <div id="div1">
            <div>
                Bienvenido a Galmacarpet
            </div>
            <div>
                <button id="borrar" name="borrar"><i class="fas fa-times"></i></button>
            </div>
		</div>
        <div class="slider">
            <ul>
                <li> <img src="./assets/img/portada2.png" alt="portada2"> </li>
                <li> <img src="./assets/img/instal1.png" alt="instal"> </li>
                <li> <img src="./assets/img/imagen4.png" alt="imagen4"> </li>
                <li> <img src="./assets/img/somos1.png" alt="somos1"> </li>
            </ul>
        </div>
    </header>