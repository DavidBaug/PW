function ValidacionLogin(){

  var username = document.getElementById("usernamelogin").value;
  var pass = document.getElementById("passlogin").value;

  if (pass.value == "")
  {
      window.alert("Por favor, introduce tu contraseña.");
      pass.focus();
      return false;
  }

  if (username.value == "")
  {
      window.alert("Por favor introduce tu username.");
      username.focus();
      return false;
  }

  return true;
}

function ValidacionUpdateUsuario() {

  var name = document.getElementById("nameform").value;
  var lastname = document.getElementById("lastnameform").value;
  var mail = document.getElementById("mailform").value;
  var username = document.getElementById("usernameform").value;
  var password = document.getElementById("passform").value;

  if (name.length > 40) {
    window.alert("El nombre no debe contener más de 40 caracteres");
    name.focus();
    return false;
  }

  if (lastname.length > 40) {
    window.alert("El apellido no debe contener más de 40 caracteres");
    lastname.focus();
    return false;
  }

  if (mail.length > 50) {
    window.alert("El correo no debe contener más de 50 caracteres");
    mail.focus();
    return false;
  }

  if (username.length > 30 || username.length < 8) {
    window.alert("El nombre de usuario debe contener entre 8 y 30 caracteres");
    username.focus();
    return false;
  }

  if (password.length > 30 || password.length < 8) {
    window.alert("La contraseña debe contener entre 8 y 30 caracteres");
    password.focus();
    return false;
  }

  window.alert("Datos cambiados");


}


function ValidacionAlta() {

  img = document.getElementById("imgalta").selectedIndex;
  name = document.getElementById("namealta").value;
  lastname = document.getElementById("lastnamealta").value;
  mail = document.getElementById("mailalta").value;
  username = document.getElementById("usernamealta").value;
  password = document.getElementById("passalta").value;



  if( img == null ) {
    alert("Selecciona una imagen de perfil");
    return false;
  }

  if (name.length > 40) {
    alert("El nombre no debe contener más de 40 caracteres");
    return false;
  }

  if (lastname.length > 40) {
    alert("El apellido no debe contener más de 40 caracteres");
    return false;
  }

  if (mail.length > 50) {
    alert("El correo no debe contener más de 50 caracteres");
    return false;
  }

  if (username.length > 30 || username.length < 8) {
    alert("El nombre de usuario debe contener entre 8 y 30 caracteres");
    return false;
  }

  if (password.length > 30 || password.length < 8) {
    alert("La contraseña debe contener entre 8 y 30 caracteres");
    return false;
  }

  return true;

}

function NoLogueado(){
  alert("Para acceder a esta función necesitas estar logueado :(");
}


function PintaLibros(titulos){



}
