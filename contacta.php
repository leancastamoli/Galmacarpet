<?php
    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $correo = $_POST['correo'];
        $consulta = $_POST['consulta'];
        if (empty($nombre) | empty($asunto) | empty($correo) | empty($consulta) ) {
?>
        <script>
            function () {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'No se pueden dejar campos vacios!'
                })
            }
        </script>
<?php    
        }else{
            $header = 'From:'.$correo;
            $header .= "X-Mailer: PHP/".phpversion()."\r\n";
            $header .= "Mime-Version: 1.0 \r\n";
            $header .= "Content-Type:text/plain";

            $mensaje = "Este mensaje fue enviado por " .$nombre . "\r\n";
            $mensaje .= "Su correo es: " .$correo . "\r\n";
            $mensaje .= "Su consulta es: \r\n";
            $mensaje .= $consulta;
            $mensaje .= "Enviado el " .date('d/m/Y',time()); 

            $para = 'leancastamoli@gmail.com';
            $asunto = $asunto;

            mail($para,$asunto,utf8_decode($mensaje),$header);

            echo 'Mensaje enviado correctamente';
        }
        
    }
        

?>


<main>
    <div class="enunciado">
        <div class="Tenunciado">
            <h1>Contacta con nosotros</h1>
        </div>
        <div class="Penunciado">
            <p>Si tienes alguna duda sobre nuestros productos o tienes alguna duda contacat con nosotros como predieras:</p>
        </div>
        <div class="Renunciado">
            <div class="social">
                <div><a href="https://www.instagram.com/?hl=es"><i class="fab fa-instagram"></a></i></div>
                <div><a href="https://es-es.facebook.com/"><i class="fab fa-facebook-square"></i></a></div>
            </div>
            <div class="Tcontacto">
                <div><i class="far fa-envelope"></i><label>correo@gmail.com</label></div>
                <div><i class="fas fa-phone"></i><label>632173212</label></div>
            </div>   
            <p>Escribenos un mensaje atraves de nuestras redes sociales</p><br>
        </div>
        <div class="formulario">
            <div class="Tformulario">
                <h1><i class="fab fa-wpforms"></i></h1>
            </div>
            <div class="Fformulario">
                <form action="index.php?p=contacta"  method="POST">
                    <div class="Cdato">
                        <label>Nombre:</label>
                    </div>
                    <div class="Bdato">
                        <input type="text"  name="nombre" placeholder="nombre">
                    </div>
                    <div class="Cdato">
                        <label>Asunto:</label>
                    </div>
                    <div class="Bdato">
                        <input type="text" name="asunto" placeholder="Asunto">
                    </div>
                    <div class="Cdato">
                        <label>Correo electronico:</label>
                    </div>
                    <div class="Bdato">
                        <input type="email" name="correo" placeholder="Correo electronico">
                    </div>
                    <div class="Cdato">
                        <label>Consulta: </label>
                    </div>
                    <div class="Bdato">
                        <textarea rows="10" cols="52" name="consulta" placeholder="Consulta"></textarea>
                    </div>
                    <div class="Benviar">
                        <button type="submit" name="enviar"><i class="fas fa-envelope"></i>  ENVIAR</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    
    

</main>