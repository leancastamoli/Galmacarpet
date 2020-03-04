<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/48e67b19ab.js" crossorigin="anonymous"></script>
    <title>Galmacarpet</title>
</head>
<body>
    <div class="barraH">
        <label class="telefono" ><i class="fas fa-phone"></i>+34 613 243 920</label>
        <label class="redes"><i class="fab fa-instagram"></i><i class="fab fa-facebook-square"></i><i class="far fa-envelope"></i></label>
    </div>
    <header>
		<div class="menu">
            <ul>
                <li><img class="logo" src="assets/img/logo.svg" alt=""></li>
                <li><a href="index.php?p=somos">¿Quienes somos?</a></li>
                <li><a href="index.php?p=instal">Instalaciones</a></li>
                <li><a href="index.php?p=catalogo">Catalogo</a></li>
                <li><a href="index.php?p=contacta">Contacta con nosotros</a></li>
            </ul>
        </div>
        <div class="titulo">
               
           <h1>
               <?php
               if(isset($_GET['p'])){
                $pagina=$_GET['p'];
                    if($pagina=="main"){	
                        echo "Galmacarpet";
                    }
                    if($pagina=="somos")	{
                        echo "¿Quienes somos?";
                    }
                    if($pagina=="instal")	{
                        echo "Instalaciones";
                    }
                    if($pagina=="catalogo")	{
                        echo "Catalogo";
                    }
                    if($pagina=="contacta")	{
                        echo "Contacta con nosotros";
                    }
                    }else{
                        echo "Galmacarpet";
                    }
                ?>
            </h1>     
            <p>Frase motivadora</p>
            <a href="index.php?p=main"><button class="botont">Inicio</button></a> 
        </div>
    </header>