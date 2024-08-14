$(document).ready(function(){
   
    $(document).on('click', '#btnIngresar', function(){
       
        $.ajax({
            url: '../../controlador/crearIngresoControlador.php',
            method: 'POST',
            dataType: 'JSON',
            data: $()
        })
    })
})