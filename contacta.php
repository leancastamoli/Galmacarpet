<?php
    if(isset($_POST['enviar'])){
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $correo = $_POST['correo'];
        $consulta = $_POST['consulta'];
        
?>
        <script>
                document.getElementById("errNom").style.color = 'red';
                document.getElementById("errAsun").innerHTML = "Nombre erroneo o vacio<br>";
                document.getElementById("errEmail").innerHTML = "Nombre erroneo o vacio<br>";
                document.getElementById("errConsul").innerHTML = "Nombre erroneo o vacio<br>";
            
        </script> 
<?php
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
    <div class="Cinfo">
        <div class="formulario">
            <div class="Tformulario">
                <h1><i class="fab fa-wpforms"></i></h1>
            </div>
            <div class="Fformulario">
                <form action="index.php?p=contacta" id="formulario" method="POST">
                    <div class="Cdato">
                        <label>Nombre:</label>
                    </div>
                    <div class="Bdato">
                        <input type="text" id="nombre" name="nombre" placeholder="nombre">
                        <div id="errNom">Nombre erroneo o vacio<br></div><br>
                    </div>
                    
                    <div class="Cdato">
                        <label>Asunto:</label>
                    </div>
                    <div class="Bdato">
                        <input type="text" id="asunto" name="asunto" placeholder="Asunto">
                        <div id="errAsun"></div><br>
                    </div>
                    <div class="Cdato">
                        <label>Correo electronico:</label>
                    </div>
                    <div class="Bdato">
                        <input type="email" id="correo" name="correo" placeholder="Correo electronico">
                        <div id="errEmail"></div><br>
                    </div>
                    <div class="Cdato">
                        <label>Consulta: </label>
                    </div>
                    <div class="Bdato">
                        <textarea id="consulta" rows="10" cols="52" name="consulta" placeholder="Consulta"></textarea>
                        <div id="errConsul"></div><br>
                    </div>
                    <div class="Benviar">
                        <button type="submit" name="enviar" id="boton"><i class="fas fa-envelope"></i>  ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d777.5325519733237!2d-0.7958778703815078!3d38.24364872019303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd63b940807472e5%3A0x3268644b12d585be!2sMantenimiento%20Ind.%20Siper!5e1!3m2!1ses!2ses!4v1583414534269!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>        </div>
    </div>
    

</main>