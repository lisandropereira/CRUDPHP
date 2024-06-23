<?php
include "modelo/conexion.php";
if (!empty($_POST["btnmodificar"])) {
    if (!empty($_POST["nombre"]) && !empty($_POST["apellido"]) && !empty($_POST["fecha"]) && !empty($_POST["correo"]) && !empty($_POST["celular"])) {
        
        $idd = $_POST["idd"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];
        $celular = $_POST["celular"];
        
       
        $sql = $conexion->query("UPDATE personas SET doce_nombre='$nombre', doce_apellido='$apellido', per_cumple='$fecha', per_mail='$correo', doce_cel='$celular' WHERE id=$idd");
        
        
        if ($sql) {
            header("Location: index.php");
        } else {
            echo '<div class="alert alert-danger">ERROR AL ACTUALIZAR</div>';
        }
    } else {
        echo '<div class="alert alert-warning">ALGUNOS DE LOS CAMPOS ESTAN VACIOS</div>';
    }
}
?>
