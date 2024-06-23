<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRO </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5ddad400d9.js" crossorigin="anonymous"></script>
</head>
<body>
  <h1 class="text-center p-2">REGISTRO DE DATOS</h1>
<div class="container-fluid row">
<form class="col-4 p-3" method="POST">
  <h3 class="text-center text-secondary">INGRESE LOS DATOS</h3>
  <?php
 
  include "modelo/conexion.php";
  include "controlador/eliminar_persona.php";
  include "controlador/registro_persona.php";
  

  
  ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NOMBRE DEL DOCENTE</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">APELLIDO DEL DOCENTE</label>
    <input type="text" class="form-control" name="apellido">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CUMPLEAÑOS DEL DOCENTE</label>
    <input type="date" class="form-control" name="fecha">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CORREO DEL DOCENTE</label>
    <input type="text" class="form-control" name="correo">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">CELULAR DEL DOCENTE</label>
    <input type="text" class="form-control" name="celular">
  </div>

  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">REGISTRAR</button>
</form>

<div class="col-8 p-4 ">
  
<table class="table">
  <thead >
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">CUMPLEAÑOS</th>
      <th scope="col">CORREO</th>
      <th scope="col">CELULAR</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "modelo/conexion.php";
    $sql=$conexion->query("select * from personas");
    while($datos=$sql->fetch_object()){?>
    <tr>
     
     <td><?=$datos->id?></td>
     <td><?=$datos->doce_nombre?> </td>
     <td><?=$datos->doce_apellido?> </td>
     <td><?=$datos->per_cumple?> </td>
     <td><?=$datos->per_mail?> </td>
     <td><?=$datos->doce_cel?> </td>
     <td>
         <a href="modificar_persona.php?id=<?=$datos->id?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
         <a onclick="return aviso()" href="index.php?id=<?=$datos->id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>

     </td>

   </tr>


   <?php }
    
    ?>
    

  </tbody>
</table>
</div>
</div>

<script>
  function aviso (){
    var respuesta=confirm("¿ESTAS SEGURO QUE DESEAS ELIMINAR ESTE REGISTRO?");
    return respuesta
  }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>