<<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio - Iventario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-warning p-2 text-white text-center">Iventario Tecnologico I.E. Presbitero Antonio Jose Bernal Londoño</h1>
    
    <br>
    <div class="container">
      <a href="form/agregar.php" class="btn btn-danger">Agregar Equipo</a>
    </div>
    <br>
    <div class="container bg-light p-3 border border-dark rounded">
      <h1>Lista de Equipos</h1>
      <table class="table">
  <thead class="table-dark">
   
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">MARCA</th>
      <th scope="col">MODELO</th>
      <th scope="col">SERIE</th>
      <th scope="col">ESTADO</th>
      <th scope="col">OBSERVACION</th>
      <th scope="col">AMBIENTE</th>
      <th scope="col">ACCESORIO</th>
      <th scope="col">ACCiONES</th>
    </tr>
  </thead>
  <tbody>
  <?php
      include("conexion.php");
      $sql = "select * from elementos";
      $query = mysqli_query($conexion, $sql);

      

      while ($fila = mysqli_fetch_array($query)) {
        ?>

      <tr>
      <th scope="row"><?php echo $fila['idElementos'] ?></th>
      <th scope="row"><?php echo $fila['nombreElementos'] ?></th>
      <th scope="row"><?php echo $fila['marca'] ?></th>
      <th scope="row"><?php echo $fila['modelo'] ?></th>
      <th scope="row"><?php echo $fila['serie'] ?></th>
      <th scope="row"><?php echo $fila['estado'] ?></th>
      <th scope="row"><?php echo $fila['observacion'] ?></th>
      <th scope="row"><?php echo $fila['ambiente'] ?></th>
      <th scope="row"><?php echo $fila['accesorio'] ?></th>
      <th scope="row">
          <a href="form/editar.php?id=<?php echo $fila['idElementos']?>" class="btn btn-warning">Editar</a>
          <a href="CRUD/eliminar.php?id=<?php echo $fila['idElementos']?>" class="btn btn-danger">Eliminar</a>

      </th>
    </tr>

        <?php
      }

    ?>
    
    
  </tbody>
</table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>