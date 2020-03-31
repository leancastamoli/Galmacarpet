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
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'El correo ha sido enviado',
        showConfirmButton: false,
        timer: 2000
      })
}
function productoCreado() {
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'El producto ha sido creado',
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
    /* var expNombre = /ab+c/;
    var expAsunto = /^[A-Za-z0-9\s]+$/g;
    var expCorreo = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/;
    var consulta = /^[A-Za-z0-9\s]+$/g; */
   
    function validar() {
        var nombre = document.getElementById("nombre").value;
        var asunto = document.getElementById("asunto").value;
        var correo = document.getElementById("correo").value;
        var consulta = document.getElementById("consulta").value;
        alert("dsadsa");
        if (nombre === "") {
            alert("El  nombre esta vacio");
            return false;
        }else if (asunto === "") {
            alert("El  nombre esta vacio");
            return false;
        }else if (correo === "") {
            alert("El  nombre esta vacio");
            return false;
        }else if (consulta === "") {
            alert("El  nombre esta vacio");
            return false;
        }
        
    }
