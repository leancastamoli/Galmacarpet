
<?php

    require("cabezera.php");

?>

<?php

    $msg="";
    $error="";
    $pagina="ini";

    if(isset($_GET['p'])){
        $pagina=$_GET['p'];
        if($pagina=="main"){	
            $actual="Galmacarpet";
            $pagina="main.php";
        }
        if($pagina=="iniciar"){	
            $actual="Galmacarpet";
            $pagina="iniciar_sesion.php";
        }
        if($pagina=="somos")	{
            $actual="¿Quienes somos?";
            $pagina="somos.php";
        }
        if($pagina=="instal")	{
            $actual="Instalaciones";
            $pagina="instal.php";
        }
        if($pagina=="catalogo")	{
            $actual="Catalogo";
            $pagina="catalogo.php";
        }
        if($pagina=="contacta")	{
            $actual="Contacta con nosotros";
            $pagina="contacta.php";
        }
        if($pagina=="insert")	{
            $actual="Insertar productos";
            $pagina="insertar.php";
        }
        if($pagina=="sub")	{
            $actual="Subtipos";
            $pagina="subtipo.php";
        }
        if($pagina=="datos")	{
            $actual="Datos";
            $pagina="datos.php";
        }
        if($pagina=="model")	{
            $actual="Modelo";
            $pagina="modelo.php";
        }
        if($pagina=="var")	{
            $actual="Variacion";
            $pagina="variacion.php";
        }
        if($pagina=="mostrar")	{
            $actual="Mostrar";
            $pagina="mostrar.php";
        }
    }else{
        $pagina="main.php";
    }

    require($pagina);

?>


<?php

        require("footer.php");

?>