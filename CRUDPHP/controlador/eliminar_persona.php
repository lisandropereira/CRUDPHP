<?php
if (!empty($_GET["id"])) {
  $id=$_GET["id"];
  $sql=$conexion->query("delete from personas where id=$id");
  if ($sql==1) {
    echo '<div class="alert alert-success">ELIMINADO CORRECTAMENTE</div>';
  } else {
    echo '<div>ERROR AL ELIMINAR</div>';
  }
  
}



?>