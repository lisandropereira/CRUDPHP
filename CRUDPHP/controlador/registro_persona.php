<?php
if(!empty($_POST["btnregistrar"])){
  if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"]) and !empty($_POST["celular"]) ){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $fecha=$_POST["fecha"];
    $correo=$_POST["correo"];
    $celular=$_POST["celular"];
    
    $sql=$conexion->query("insert into personas(doce_nombre,doce_apellido,per_cumple,per_mail,doce_cel) values ('$nombre', '$apellido' , '$fecha' , '$correo' , '$celular')");
    if ($sql=1) {
      echo '<div class="alert alert-success">PERSONA REGISTRADA CORRECTAMENTE</div>';
    } else {
      echo '<div class="alert alert-danger">ERROR AL REGISTRAR</div>';
    }
    

  }else{
    echo '<div class="alert alert-warning">ALGUNOS DE LOS CAMPOS ESTAN VACIOS</div>';
  }


}


?>