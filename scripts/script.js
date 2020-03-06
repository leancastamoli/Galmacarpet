
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

function correoEnviado() {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'El correo ha sido enviado',
        showConfirmButton: false,
        timer: 2000
      })
}

/* Validar datos formulario consulta */

function comprobarNombre(nombre) {
    var nombre = nombre;
    alert(nombre);
     resultado = false;
    if (nombre == "" || asunto == "" || correo == "" || consulta == "" ) {
        return true;
    }else{
        var array = new Array();
        var expNombre = /ab+c/;
        var expAsunto = /^[A-Za-z0-9\s]+$/g;
        var expCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
        var consulta = /^[A-Za-z0-9\s]+$/g;
            
    } 
    
}