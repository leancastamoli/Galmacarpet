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
