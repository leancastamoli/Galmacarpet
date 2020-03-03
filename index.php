
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
    }else{
        $pagina="main.php";
    }

    require($pagina);

?>


<?php

        require("footer.php");

?>