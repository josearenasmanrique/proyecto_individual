<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/mensajes.css">
 
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Mensajes PHP</title>
</head>
 
<body>
    <div id="general" class="container">

    </div>


    <div class="flex">
        <a href="login.php">Regresar al formulario</a>
    </div>


</body>

<?php
  session_start();
   
  $user = $_POST['user'];
  $password = $_POST['passwordin'];
  // Datos para conectar a la base de datos.
  $nombreServidor = "localhost";
  $nombreUsuario = "root";
  $passwordBaseDeDatos = "";
  $nombreBaseDeDatos = "sistemaprincipal";
  // Crear conexión con la base de datos.
  $conn = new mysqli($nombreServidor, $nombreUsuario, $passwordBaseDeDatos, $nombreBaseDeDatos);
  // Validar la conexión de base de datos.
  if ($conn ->connect_error) {
    die("Connection failed: " . $conn ->connect_error);
  } 
  // modificacion  SQL.

  // Consulta segura para evitar inyecciones SQL.
  $consulta = mysqli_query($conn,"SELECT * FROM user_passwords WHERE user='$user'");
 
  while ($respuesta = mysqli_fetch_assoc($consulta)) {
    $usuarioregres=$respuesta['user'];
    $passregres=$respuesta['passwordin'];
    $tiporegres=$respuesta['tipo_usuario'];
    $nombre=$respuesta['nombre'];
    $addres=$respuesta['addres'];
    $tiemporesidencia=$respuesta['tiemporesidencia'];
    $telefono=$respuesta['telefono'];
    $edad=$respuesta['edad'];
    $puestosolicita=$respuesta['puestosolicita'];
    $salario=$respuesta['salario'];
    $horassemanalespuedetrabajar=$respuesta['horassemanalespuedetrabajar'];
    $horarionocturno=$respuesta['horarionocturno'];
    $empleodeseado=$respuesta['empleodeseado'];
    $comenzaratrabajar=$respuesta['comenzaratrabajar'];


       echo ' <form action="madministrador.php" method="POST" id="formularioadmin" class="login">
       <center>
       <h1>INGRESE EL VALOR A BUSCAR</h1>      
       <input id="busqueda" name="user" type="text" size="70" placeholder="INGRESE EL USUARIO A BUSCAR AQUI" value="'.$usuarioregres.'" required>
       </input>
       <input name="passwordin" type="submit" value="CONSULTAR" class="enviar">      
       </center><br><br><br>';
 
         $part1='<html><head><title>FORMULARIO</title></head>';
         $part2='<body bgcolor="WHITE">';
         $part3='<center><h1>FORMULARIO DE SOLICITUD DE EMPLEO</h1></center><br>';
         $part4='<div id="capa1" ><div id="capa2"><H5 align="center">	ESCRIBA TODA LA INFORMACION SOLICITADA EN EL CAMPO CORRESPONDIENTE</H5></div><div id="capa3" ><table align="center"  cellpadding=5><tr><td bgcolor="white" align="center" colspan="5">SE PODRIA REQUERIR UN CONTROL DE CONSUMO DE DROGA A LOS POSTULANTES</td><td></td><td></td><td></td><td></td></tr><tr><td align="center" colspan="3">COMPLETE LAS PAGINAS 1-3</td><td>FECHA</td><td colspan="1"><div id="current_date"></div></td></tr>';
         $part4_1='<tr><td colspan="5">usuario:<input id="porfin" name="porfin" type="text" size="30" placeholder="INGRESE UN USUARIO" value="'.$usuarioregres.'" required></input>contrasena:<input id="pass" name="password" type="text" size="30" placeholder="INGRESE UNA CONTRASENA" value="'.$passregres.'" ></input></td></tr>';
         $part5='<tr><td colspan="5">Nombre:<input onchange="nombre()" id="nombre" name="name" type="text" size="70" placeholder="INGRESE SU NOMBRE AQUI" value="'.$nombre.'"  style="text-transform:uppercase;" onchange="javascript:this.value=this.value.toUpperCase();" required ></input></td></tr>';
         $part6='<tr border="1"><td><PRE></PRE></td><td>APELLIDO PATERNO</td><td>APELLIDO MATERNO</td><td>NOMBRE(S)</td><td></td></tr>';
         $part7='<tr><td colspan="5">Direccion actual: <input id="direccion" name="direccion" type="text" size="85" placeholder="INGRESE SU DOMICILIO AQUI" value="'.$addres.'" style="text-transform:uppercase;" onchange="javascript:this.value=this.value.toUpperCase();" required ></input></td></tr><tr><td align="center">Numero:</td><td align="center">Calle</td><td align="center">ciudad</td><td align="center">Provincia</td><td align="center">Codigo postal</td></tr>';
         $part8='<tr><td colspan="5">Tiempo de Residencia:<input id="Residencia" name="Residencia" type="text" size="60" placeholder="INGRESE SU TIEMPO DE RESIDENCIA AQUI" value="'.$tiemporesidencia.'" maxlength="2" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required></input>/ANOS</td></tr>';
         $part9='<tr><td colspan="5">Telefono:<input id="Telefono" name="Telefono" type="text" size="40" placeholder="INGRESE SU TELEFONO AQUI" value="'.$telefono.'"  minlength="10" maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required></input></td></tr>';
         $part10='<tr><td colspan="5">si es mayor de edad indique su edad:<input id="edad" name="edad" type="text" size="10" placeholder="ingrese edad" value="'.$edad.'" maxlength="2" onchange="alert("ghola");" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" minlength="2" maxlength="2" required></input>/ANOS</td></tr>';
         $part11='<tr><td colspan="5">Puesto que solicita:<input id="solicita" name="solicita" type="text" size="35" placeholder="INGRESE EL PUESTO QUE SOLICITA AQUI" value="'.$puestosolicita.'" style="text-transform:uppercase;" onchange="javascript:this.value=this.value.toUpperCase();" required ></input></td></tr>';
         $part12='<tr><td colspan="5">Salario deseado:  $<input id="Salario" name="Salario" type="text" size="35" placeholder="INGRESE EL Salario QUE SOLICITA AQUI" value="'.$salario.'" maxlength="5" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required></input></td></tr>';
         $part13='<tr><td colspan="5">¿Cuantas horas semanales puede trabajar?<input id="horassemanales" name="horassemanales" type="text" size="5" placeholder="horas" value="'.$horassemanalespuedetrabajar.'" maxlength="2" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" required></input>/horas</td></tr>';
         $part14='<tr><td colspan="5">¿Puede trabajar en horario nocturno? <input type="radio" name="horarionocturno" value="si" /> si<input type="radio" name="horarionocturno" value="no" /> no</td></tr>';
         $part15='<tr><td colspan="5">Empleo deseado <br><input type="radio" name="Empleodeseado" value="c" />tiempo completo solamente<input type="radio" name="Empleodeseado" value="p" />tiempo parcial solamente<br><input type="radio" name="Empleodeseado" value="cp" />tiempo completo o parcial<br></td></tr><br>';
         $part16='<tr><td colspan="5">¿Cuando esta disponible para comenzar a trabajar?<input id="Cuandodisponible" name="Cuandodisponible" type="text" size="37" placeholder="INDIQUE AQUI" value="'.$comenzaratrabajar.'" ></input></td></tr>';
         $part18='  <select name="hacer" id="cars">
         <option value="modificar">modificar</option>
         <option value="eliminar">eliminar</option>
       </select>';  
         $part17='</table><center>
         <input type="submit" value="Enviar" class="enviar">
         </center><br><br><br><br><br></form>';
         echo $part1.$part2.$part3.$part4.$part4_1.$part5.$part6.$part7.$part8.$part9.$part10.$part11.$part12.$part13.$part14.$part15.$part16.$part18.$part17;
       
    
 
}
?>



<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formularioadmin").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
  evento.preventDefault();


      var Residencia = document.getElementById('Residencia').value;
      if(Residencia<10){
      alert("tienes que tener un minimo de 10 años de Residencia");  
      document.getElementById('Residencia').style.backgroundColor="red";
      return;
      }

      var Salario = document.getElementById('Salario').value;
      if(Salario>35000){
      alert("LO SENTIMOS pero nosotros no contamos con puestos muy evaluados");  
      document.getElementById('Salario').style.backgroundColor="red";
      return;
      }
      


      var edad = document.getElementById('edad').value;
      if(edad<18){
      alert("tienes que ser mayor de edad para llenar este formulario");  
      document.getElementById('edad').style.backgroundColor="red";
      return;
      }
      var horassemanales = document.getElementById('horassemanales').value;
      if(horassemanales>56){
      alert("NO PUEDES TRABAJAR MAS DE 56 HORAS");  
      document.getElementById('horassemanales').style.backgroundColor="red";
      return;
      }

      if(horassemanales<40){
      alert("NO PUEDES TRABAJAR MENOS DE 40 HORAS");  
      document.getElementById('horassemanales').style.backgroundColor="red";
      return;
      }
      //alert('Tiene alguna minúscula',/[a-z]/.test(nombre));
      //alert('Tiene alguna mayúscula',/[A-Z]/.test(nombre));
      //alert('Tiene algún dígito',/[0-9]/.test(nombre));
      //alert('Tiene una sóla mayúscula',/^[^A-Z]*[A-Z][^A-Z]*$/.test(nombre));
  this.submit();
}
</script>  


 

 
</html>
