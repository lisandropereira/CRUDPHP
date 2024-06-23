<?php
include "modelo/conexion.php";
$id = $_GET["id"];
$sql = $conexion->query("SELECT * FROM personas WHERE id=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MODIFICAR DATOS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
  <h3 class="text-center text-secondary">INGRESE LOS DATOS</h3>
  <input type="hidden" name="idd" value="<?= $_GET["id"]?>">
  <?php
  include "controlador/modificar_datos.php";
  while ($datos = $sql->fetch_object()) { ?>
      <div class="mb-3">
        <label for="nombre" class="form-label">NOMBRE DEL DOCENTE</label>
        <input type="text" class="form-control" name="nombre" value="<?php echo $datos->doce_nombre; ?>">
      </div>
      <div class="mb-3">
        <label for="apellido" class="form-label">APELLIDO DEL DOCENTE</label>
        <input type="text" class="form-control" name="apellido" value="<?php echo $datos->doce_apellido; ?>">
      </div>
      <div class="mb-3">
        <label for="fecha" class="form-label">CUMPLEAÑOS DEL DOCENTE</label>
        <input type="date" class="form-control" name="fecha" value="<?php echo $datos->per_cumple; ?>">
      </div>
      <div class="mb-3">
        <label for="correo" class="form-label">CORREO DEL DOCENTE</label>
        <input type="text" class="form-control" name="correo" value="<?php echo $datos->per_mail; ?>">
      </div>
      <div class="mb-3">
        <label for="celular" class="form-label">CELULAR DEL DOCENTE</label>
        <input type="text" class="form-control" name="celular" value="<?php echo $datos->doce_cel; ?>">
      </div>
  <?php } ?>

  <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">GUARDAR</button>
  <button type="button" class="btn btn-secondary" onclick="location.href='index.php';">ATRÁS</button>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

