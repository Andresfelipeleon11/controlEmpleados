$(document).ready(function () {

  //Boton Ingresar
  let btnIngresar = document.querySelector("#btnIngresar");

  //#Evento
  btnIngresar.addEventListener("click", function () {
    //variables del formulario
    let numero_documento = document.querySelector("#numero_documento").value;
    let contrasena = document.querySelector("#contrasena").value;

    //#Validaciones
    if (numero_documento == "") {
      alert("Por favor, ingrese su número de identificación");
      setInterval(window.location.reload(), 2000);
      return false;
    }
    if (numero_documento.length > 10 || numero_documento.length < 10) {
      alert("Por favor, ingrese un número de identificación válido");
      setInterval(window.location.reload(), 2000);
      return false;
    }
    if (contrasena == "") {
      alert("Por favor, ingrese su contraseña");
      setInterval(window.location.reload(), 2000);
      return false;
      
    } else {
      $.ajax({
        url: "controlador/crearIngresoControlador.php",
        method: "POST",
        datatype: "JSON",
        data: $("#formLogin").serialize(),
      })
        .done(function (json) {
          if (json != 0) {
            alert("Bienvenido");
            window.location.href = "vista/vistaEmpleado.php";
          } else {
            alert("Usuario o contraseña incorrectos");
            return false;
          }
        })
        .fail(function (error) {
          console.error("Error:", error);
        });
    }
  });
});
