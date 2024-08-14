$(document).ready(function(){
   
$(document).on('click', '#btnIngresar', function(){
    $.ajax({
        url: 'controlador/crearIngresoControlador.php',
        method: 'POST',
        datatype: 'JSON',
        data: $('#formLogin').serialize(),
    }).done(function(json){
      if(json != 0){
        alert('Bienvenido')
        window.location.href = 'vista/vistaEmpleado.php';
      }
      else{
        alert('Usuario o contraseña incorrectos');
        return false;
      }

    }).fail(function(error){
       console.error('Error:', error);
    })
})
})