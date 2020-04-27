/* Errores */
function errorcredencial(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'No se ha encontrado ningun usuario con esas credenciales!'
    })
}

function errorVacio(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'No se pueden dejar campos vacios!'
    })
}
function imagenExistente(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Esta imagen ya existe!'
    })
}
function tipoIncorrecto(){
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Este tipo de archivo no esta permitido!'
    })
}


    /* Correctos */
function correoEnviado() {
    var hoy = new Date();
    var dia = hoy.getDay;
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'El correo ha sido enviado el dia ' + dia,
        showConfirmButton: false,
        timer: 2000
      })
}

function productoEditado() {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'El producto ha sido editado',
        showConfirmButton: false,
        timer: 2000
      })
}


/* Validar datos formulario consulta */
    
   
    function validar() {
        var expNombre = /^[A-Za-z]+$/;
        var expAsunto = /^[A-Za-z0-9\s]+$/;
        var expCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
        var expconsulta = /^[A-Za-z0-9\s]+$/; 
        var nombre = document.getElementById("nombre").value;
        var asunto = document.getElementById("asunto").value;
        var correo = document.getElementById("correo").value;
        var consulta = document.getElementById("consulta").value;
        var errNom = document.getElementById("errNom");
        var errAsun = document.getElementById("errAsun");
        var errEmail = document.getElementById("errEmail");
        var errConsul = document.getElementById("errConsul");
        var error = true;
        if (nombre === null || nombre === '') {
            errNom.innerHTML = ('Agregar nombre');
            error = false;
        }else if( expNombre.test(nombre) ){
            error = true;
        }else{
            errNom.innerHTML = ('El nombre no es correcto');
            error = false;
        }
        if (asunto === null || asunto === '' ) {
            errAsun.innerHTML = ('Agregar asunto');
            error = false;
        }else if( expAsunto.test(asunto) ){
            error = true;
        }else{
            errAsun.innerHTML = ('El asunto no es correcto');
            error = false;
        }
        if (correo === null || correo === '' ) {
            errEmail.innerHTML = ('Agregar correo');
            error = false;
        }else if (expCorreo.test(correo)) {
            error = true;
        }else{
            errEmail.innerHTML = ('El correo no es correcto');
            error = false;
        }
        if (consulta === null || consulta === '' ) {
            errConsul.innerHTML = ('Agregar consulta');
            error = false;
        }else if ( expconsulta.test(consulta) ) {
            error = true;
        }else{
            errConsul.innerHTML = ('La consulta no es correcta');
            error = false;
        }
        return error;
    }
    $(document).ready(function(){
        var latitud = "38.2303095";
        var longitud = "-0.8150790";
          $.ajax({
              type: 'GET',
              url: 'http://api.openweathermap.org/data/2.5/weather?lat='+ Latitud +'&lon=' + Longitud + '&units=metric&appid=9f50a805aa0089a1edd1829a5db029f0',
              dataType: 'jsonp'
          })
  
          .done(function(data){
            alert("Correcto. La longitud es " + Longitud + " y la latitud es " + Latitud);
            console.log(data);
            var tiempo = data.main.temp;
            var ciudad = data.name;
            alert("En " + ciudad + " hace " + tiempo + " grados");
          });
      });