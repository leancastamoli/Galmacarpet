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

/* Validar datos formulario consulta */
function comprobarNombre() {
    document.getElementById("errNom").innerHTML = "Nombre erroneo o vacio<br>";
    document.getElementById("errAsun").innerHTML = "Nombre erroneo o vacio<br>";
    document.getElementById("errEmail").innerHTML = "Nombre erroneo o vacio<br>";
    document.getElementById("errConsul").innerHTML = "Nombre erroneo o vacio<br>";
    }
/* 
function comprobarNombre(correo) {
    var correo = correo;
    alert(correo);
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
    
} */