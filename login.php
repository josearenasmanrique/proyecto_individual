<!DOCTYPE html>

<html>

<header>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="css/css_login.css" media="screen" />
</header>


<body>
  <div class="container">
    <div class="screen">
      <div class="screen__content">


        <form action="sistemadeinicio.php" method="POST" id="formulario" class="login">

          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input name="user" id="user" type="text" class="login__input" placeholder="ingrese usuario" >
          </div>

          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input name="passwordin" id="password" type="password" class="login__input" placeholder="ingrese contraseña" >
          </div>

          <input type="submit" value="REGISTRAR" class="enviar">
          <input type="submit" value="Enviar" class="enviar">

        </form>
<script>
  document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
  evento.preventDefault();
  var usuario = document.getElementById('user').value;
  if(usuario.length == 0) {
    alert('No has escrito nada en el usuario');
  }
  var clave = document.getElementById('password').value;
  if (clave.length < 6) {
    alert('La clave no es válida');
  }
  this.submit();
}
</script>  

        <div class="social-login">
          <!--<h3><a onclick="pruebaregistro()">registro</a></h3>
          <h3><a onclick="arrancapaGinaindex()">regresar</a></h3>-->
          <div class="social-icons">
          </div>
        </div>

      </div>

      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape4"></span>
        <span class="screen__background__shape screen__background__shape3"></span>
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>


    </div>
  </div>


</body>

</html>